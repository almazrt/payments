<?php

namespace App\Modules\Confirmation\Exceptions;

class InvalidCodeException extends \Exception
{
    protected $message = 'Не правильный код подтверждения';
}
