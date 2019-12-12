<?php

namespace Flyweight\Items;

class Char
{
    private $char;

    public function __construct(string $char)
    {
        $this->char = $char;
    }

    public function getChar() :string
    {
        return $this->char;
    }
}
