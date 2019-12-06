<?php

namespace Prototype\Products\Prototypes;

abstract class PenProduct
{
    private $code;

    public function __construct(string $code)
    {
        $this->code = $code;
    }

    public function getCode()
    {
        return $this->code;
    }

    abstract protected function __clone();

    abstract public function use(string $str);

    public function createClone()
    {
        return clone $this;
    }
}
