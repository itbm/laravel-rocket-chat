<?php

namespace Timetorock\LaravelRocketChat\Exceptions;

use Exception;

class TeamActionException extends Exception
{

    public function __construct($message = null, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function __toString()
    {
        return $this->getMessage();
    }

    public function setMessage($message) {
        $this->message = $message;
    }
}