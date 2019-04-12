<?php

namespace RentManager\Runtime;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\MessageFormatter;
use GuzzleHttp\Exception\RequestException;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use RentManager\Runtime\Exceptions\RentManagerRuntimeException;

/**
 * Rent Manager api client.
 */
class Client
{
    const AUTH_HEADER = "X-RM12Api-ApiToken";

    /** @var Client */
    private static $instance;

    /** @var string */
    private $corpId;   

    /** @var string */
    private $username;

    /** @var string */
    private $password;

    /** @var int */
    private $location;

    /** @var HttpClient */
    private $httpClient;

    /** @var HandlerStack */
    private $handlerStack;

    /** @var array */
    private $httpHeaders = [];

    /** @var array */
    private $options = [
        "debug" => false,
        'debugFile' => null,
        'retry' => 3
    ];

    /** @var string */
    private $logFile;

    private $initialLogin = false;

    private $retryCount = 0;

    public function __construct($corpId, $username, $password, $location, $options = [])
    {
        $this->corpId   = $corpId;
        $this->username = $username;
        $this->password = $password;
        $this->location = $location;

        //  Set any options.
        foreach($options as $option => $value) {
            $this->options[$option] = $value;
        }

        $this->initHttpClient();
        //$this->login();

        Client::$instance = $this;
    }

    /**
     * Initialize the http client.
     * @return void
     */
    private function initHttpClient()
    {
        $httpClient = new HttpClient([
            "base_uri" => "https://{$this->corpId}.api.rentmanager.com/",
            "verify"   => false
            ]);
        
        $this->httpClient = $httpClient;
    }

    /**
     * Get the handler for the http client.
     * @return HandlerStack
     */
    private function getHandler()
    {
        if(!isset($this->handlerStack)) {

             //  Create new log file.
            if(!file_exists($this->options['debugFile'])) {
                file_put_contents($this->options['debugFile'], '');
            }

            $stack = HandlerStack::create();
            $logger = new Logger("Logger");
            $logger->pushHandler(new StreamHandler($this->options['debugFile'], Logger::DEBUG));
            $stack->push(
                Middleware::log(
                    $logger,
                    new MessageFormatter(MessageFormatter::DEBUG)
                )
            );

            $this->handlerStack = $stack;
        }

        return $this->handlerStack;
    }

    /**
     * Login to the rent manager api. 
     * This will set the api token header needed for future requests.
     * @return void
     */
    private function login()
    {
        $credentials = [
            "Username" => $this->username,
            "Password" => $this->password,
            "LocationID" => $this->location
        ];

        $this->removeHttpHeader(self::AUTH_HEADER); //  Remove auth header when logging in.
        $response = $this->request("POST", "Authentication/AuthorizeUser", null, $credentials);  //  Post the auth credentials.
        $apiToken = trim($response->getBody(), '"');    //  Get the api token from the response.
        $this->addHttpHeader(self::AUTH_HEADER, $apiToken); //  Add the auth header for future requests.

        //  Set the initial login value to true.
        if(!$this->initialLogin) {
            $this->initialLogin = true;
        }
    }

    /**
     * Make a request to the Rent Manager API.
     * @param string $method The request method. GET | POST | PUT | PATCH | DELETE
     * @param string $resource The resource url.
     * @param string $parameters The query parameters.
     * @param string|array|BaseModel|BaseModel[] $body The request json body.
     */
    public function request($method, $resource, $parameters = null, $body = null) 
    {
        if(!$this->initialLogin) {
            $this->login();
        }

        $options = [
            "headers" => $this->httpHeaders
        ];

        //  Add handler if the client is debugging.
        if($this->options["debug"]) {
            $options["handler"] = $this->getHandler();
        }

        //  Add query parameters.
        if($parameters) {
            $options["query"] = $parameters;
        }

        //  Add request body.
        if($body) {
            $options["json"] = $body;
        }

        try {

            $result = $this->httpClient->request($method, $resource, $options);
            $this->resetRetries();  //  Request succeeded, reset the retries attempted.
            return $result;

        } catch (RequestException $e) {

            //  If we got a 401, try re-authenticating.
            if($e->getCode() == 401) {

                if($this->hasReachedRetryLimit()) {
                    throw new RentManagerRuntimeException("Retry limit for request has been reached.", $e->getCode());
                } else {
                    $this->login(); //  Re-authenticate
                    $this->incrementRetries();  //  Increment the retries.
                    return $this->request($method, $resource, $parameters, $body);
                }

            } else {
                throw new RentManagerRuntimeException((string) $e->getResponse()->getBody(), $e->getCode());
            }
        }

    }

    /**
     * Increment the try count for the request.
     */
    private function incrementRetries()
    {
        $this->retryCount++;
    }

    /**
     * Reset the retries made for the request.
     */
    private function resetRetries()
    {
        $this->retryCount = 0;
    }

    /**
     * Check if the request retry limit has been reached.
     * @return bool
     */
    private function hasReachedRetryLimit() 
    {
        return $this->retryCount >= $this->options['retry'];
    }

    /**
     * Add an http header.
     * @param string $name
     * @param string $value
     */
    public function addHttpHeader($name, $value) 
    {
        $this->httpHeaders[$name] = $value;
    }

    /**
     * Remove a http header.
     * @param string $name The header name.
     */
    public function removeHttpHeader($name)
    {
        unset($this->httpHeaders[$name]);
    }

    /**
     * Get the Rent Manager client instance.
     * @return Client
     */
    public static function instance()
    {
        if(!isset(Client::$instance)) {
            throw new RentManagerRuntimeException("Rent manager client has not been initialized.");
        } else {
            return Client::$instance;
        }
    }

    /**
     * Initialize Rent Manager service.
     * @param string $corpId The corp id for the Rent Manager account.
     * @param string $username The api user's username.
     * @param string $password The api user's password.
     * @param int $location The location id. 1 for production, 2 for sandbox.
     * @param array $options Any additional options.
     */
    public static function init($corpId, $username, $password, $location, $options = [])
    {
        new Client($corpId, $username, $password, $location, $options);
    }
}