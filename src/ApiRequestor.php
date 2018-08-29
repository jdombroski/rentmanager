<?php

namespace RentManager;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\MessageFormatter;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;


/**
 * ApiRequestor short summary.
 *
 * @version 1.0
 * @author jdombroski
 */
class ApiRequestor
{
    private $_httpClient;
    private $_headers = [];
    private $_logPath = null;

    public function __construct($corpId) {
        $client = new HttpClient([
            "base_uri" => "https://{$corpId}.api.rentmanager.com/",
            "verify"   => false
            ]);
        $this->setHttpClient($client);
    }

    /**
     * Set the http client.
     * @param HttpClient $httpClient
     */
    private function setHttpClient(HttpClient $httpClient) {
        $this->_httpClient = $httpClient;
    }

    /**
     * Get the http client.
     * @return HttpClient
     */
    private function getHttpClient() {
        return $this->_httpClient;
    }

    /**
     * Set a header for the request.
     * @param mixed $name
     * @param mixed $value
     */
    public function setHeader($name, $value) {
        $this->_headers[$name] = $value;
    }

    /**
     * Get the headers for the request.
     * @return mixed
     */
    private function getHeaders() {
        return $this->_headers;
    }

    /**
     * Make a request.
     * @param mixed $method
     * @param mixed $resource
     * @param mixed $parameters
     * @param mixed $body
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function request($method, $resource, $parameters, $body = null) {

        $options = ["headers" => $this->getHeaders()];

        //  Get handler if there is a log path.
        if($this->_logPath) {
            $options["handler"] = $this->getHandler();
        }

        if($parameters)
            $options["query"] = $parameters;

        if($body)
            $options["json"] = $body;

        return $this->getHttpClient()->request($method, $resource, $options);
    }

    /**
     * Enable logging for the requestor.
     *
     * @param string $path
     * @return void
     */
    public function enableLogging($path) {
        $this->_logPath = $path;
    }

    private function getHandler() {

        $stack = HandlerStack::create();
        $logger = new Logger("Logger");
        $logger->pushHandler(new StreamHandler($this->_logPath, Logger::DEBUG));
        $stack->push(
            Middleware::log(
                $logger,
                new MessageFormatter(MessageFormatter::DEBUG)
            )
        );

        return $stack;
    }
}