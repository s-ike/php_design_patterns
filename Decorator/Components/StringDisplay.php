<?php

namespace Decorator\Components;

use Decorator\Interfaces\Display;

class StringDisplay implements Display
{
    private $str;

    public function __construct($str)
    {
        $this->str = $str;
    }

    public function getStr() :string
    {
        return $this->str;
    }

    public function show() :string
    {
        return $this->getStr();
    }
}
