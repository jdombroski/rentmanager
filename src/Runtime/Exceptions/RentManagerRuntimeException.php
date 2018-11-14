<?php

namespace RentManager\Runtime\Exceptions;

use Exception;

class RentManagerRuntimeException extends Exception
{
    public function __construct($message = '', $code = 1, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}