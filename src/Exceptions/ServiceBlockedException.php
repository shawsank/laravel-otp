<?php

namespace Shawsank\OTP\Exceptions;

use Exception;

class ServiceBlockedException extends Exception
{
    public function __contruct($message, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
