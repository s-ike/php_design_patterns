<?php

namespace ChainOfResponsibility\Handlers;

use ChainOfResponsibility\Handlers\Super\ValidationHandler;

class NumberValidationHandler extends ValidationHandler
{
    protected function execValidation(string $str) :bool
    {
        return preg_match('/^[0-9]+$/', $str);
    }

    protected function getErrorMessage() :string
    {
        return 'Please enter only numbers!';
    }
}
