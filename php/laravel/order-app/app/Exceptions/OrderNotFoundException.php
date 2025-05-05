<?php

namespace App\Exceptions;

use Exception;

class OrderNotFoundException extends Exception
{

    public function __construct($code, $message)
    {
        parent::__construct($message, $code);
    }
}
