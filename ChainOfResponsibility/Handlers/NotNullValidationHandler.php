<?php

namespace ChainOfResponsibility\Handlers;

use ChainOfResponsibility\Handlers\Super\ValidationHandler;

class NotNullValidationHandler extends ValidationHandler
{
    protected function execValidation(string $str) :bool
    {
        return (is_string($str) && $str !== '');
    }

    protected function getErrorMessage() :string
    {
        return 'Please enter!';
    }
}
