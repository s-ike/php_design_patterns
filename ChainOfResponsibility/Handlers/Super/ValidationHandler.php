<?php

namespace ChainOfResponsibility\Handlers\Super;

abstract class ValidationHandler
{
    private $next_handler = null;

    public function __construct()
    {
        $this->next_handler = null;
    }

    public function setHandler(ValidationHandler $handler) :ValidationHandler
    {
        $this->next_handler = $handler;
        return $this;
    }

    public function getNextHandler() :?ValidationHandler
    {
        return $this->next_handler;
    }

    public function validate(string $str) :string
    {
        if (! $this->execValidation($str)) {
            return $this->getErrorMessage();
        } elseif ($this->getNextHandler()) {
            return $this->getNextHandler()->validate($str);
        }
        return 'OK';
    }

    abstract protected function execValidation(string $str) :bool;

    abstract protected function getErrorMessage() :string;
}
