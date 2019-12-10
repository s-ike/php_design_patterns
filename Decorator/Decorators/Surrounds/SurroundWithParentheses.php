<?php

namespace Decorator\Decorators\Surrounds;

use Decorator\Decorators\DisplayDecorator;

class SurroundWithParentheses extends DisplayDecorator
{
    public function getStr() :string
    {
        return '('.$this->display->getStr().')';
    }
}
