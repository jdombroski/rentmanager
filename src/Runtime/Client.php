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
    protected static $instance;

    /** @var string */
    protected $corpId;   

    /** @var string */
    protected $username;

    /** @var string */
    protected $password;

    /** @var int */
    protected $location;

    /** @var HttpClient */
    protected $httpClient;

    /** @var HandlerStack */
    protected $handlerStack;

    /** @var array */
    protected $options = [
        "debug" => false,
        'debugFile' => null
    ];

    /** @var string */
    protected $logFile;

    protected $token;

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

        Client::$instance = $this;
    }

    /**
     * Initialize the http client.
     * @return void
     */
    protected function initHttpClient()
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
    protected function getHandler()
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
     * This returns the api token needed to make requests.
     * @return string
     */
    protected function login()
    {
        $credentials = [
            "Username" => $this->username,
            "Password" => $this->password,
            "LocationID" => $this->location
        ];

        $response = $this->httpClient->request("POST", "Authentication/AuthorizeUser", ['json' => $credentials]);  //  Post the auth credentials.
        $apiToken = trim($response->getBody(), '"');    //  Get the api token from the response.
        return $apiToken;
    }

    /**
     * Log out of the rent manager api with a token.
     */
    protected function logout($token) 
    {
        $this->httpClient->post("/Authentication/DeAuthorize?token={$token}");
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
        $token = $this->login();

        $options = [
            "headers" => [self::AUTH_HEADER => $token]
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
            return $this->httpClient->request($method, $resource, $options);
        } catch (RequestException $e) {
            throw new RentManagerRuntimeException((string) $e->getResponse()->getBody(), $e->getCode());
        } finally {
            $this->logout($token);
        }

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