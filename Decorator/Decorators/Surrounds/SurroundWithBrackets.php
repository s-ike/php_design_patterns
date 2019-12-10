<?php

namespace Decorator\Decorators\Surrounds;

use Decorator\Interfaces\Display;
use Decorator\Decorators\DisplayDecorator;

class SurroundWithBrackets extends DisplayDecorator
{
    public function getStr() :string
    {
        return '['.$this->display->getStr().']';
    }
}
