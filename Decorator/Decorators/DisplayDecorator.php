<?php

namespace Decorator\Decorators;

use Decorator\Interfaces\Display;

abstract class DisplayDecorator implements Display
{
    protected $display;

    public function __construct(Display $display)
    {
        $this->display = $display;
    }

    abstract public function getStr() :string;

    public function show() :string
    {
        return $this->getStr();
    }
}
