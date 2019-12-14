<?php

namespace ChainOfResponsibility\Handlers;

use ChainOfResponsibility\Handlers\Super\ValidationHandler;

class MaxLengthValidationHandler extends ValidationHandler
{
    private $max_length;

    public function __construct(int $max_length = 10)
    {
        parent::__construct();
        $this->max_length = $max_length;
    }

    private function getMaxLength() :int
    {
        return $this->max_length;
    }

    protected function execValidation(string $str) :bool
    {
        return strlen($str) <= $this->getMaxLength();
    }

    protected function getErrorMessage() :string
    {
        return 'Maximum '.$this->getMaxLength().' charactors only!';
    }
}
