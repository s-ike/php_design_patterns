<?php

namespace Prototype\Products;

use Prototype\Products\Prototypes\PenProduct;

class FontStylePen extends PenProduct
{
    protected function __clone()
    {
    }

    public function use(string $str) :string
    {
        $result = '';
        if ($this->getCode() === 'bold') {
            $result .= '<span style="font-weight: bold;">';
        } else {
            $result .= '<span style="font-style: '.$this->getCode().';">';
        }
        $result .= $str.'</span>';

        // return '<li><span style="font-weight: bold;">'.$str.'</li>';
        return $result;
    }
}
