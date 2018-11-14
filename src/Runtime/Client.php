<?php

namespace RentManager\Runtime;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\MessageFormatter;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use RentManager\Runtime\Exceptions\RentManagerRuntimeException;

/**
 * Rent Manager api client.
 */
class Client
{
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
        'debugFile' => null
    ];

    /** @var string */
    private $logFile;

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
        $this->login();

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

        $response = $this->request("POST", "Authentication/AuthorizeUser", null, $credentials);  //  Post the auth credentials.
        $apiToken = trim($response->getBody(), '"');    //  Get the api token from the response.
        $this->addHttpHeader("X-RM12Api-ApiToken", $apiToken);
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

        return $this->httpClient->request($method, $resource, $options);
    }

    /**
     * Add an http header.
     * @return $this
     */
    public function addHttpHeader($name, $value) 
    {
        $this->httpHeaders[$name] = $value;
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
}