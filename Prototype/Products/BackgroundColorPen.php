<?php

namespace Prototype\Products;

use Prototype\Products\Prototypes\PenProduct;

class BackgroundColorPen extends PenProduct
{
    protected function __clone()
    {
    }

    public function use(string $str) :string
    {
        $result = '<span style="background-color: '.$this->getCode().';">'.$str.'</span>';

        return $result;
    }
}
