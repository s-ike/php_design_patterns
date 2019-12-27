<?php

namespace Strategy\Exchanges;

use Strategy\Exchanges\Interfaces\ExchangeInterface;

class ErrorExchange implements ExchangeInterface
{
    private $jpy = 0;
    private $rate = 1.0;
    private $code = 'JPY';

    public function __construct($jpy)
    {
        $this->jpy = $jpy;
    }

    public function currencyConversion() :float
    {
        return $this->jpy * $this->rate;
    }

    public function getCode() :string
    {
        return $this->code;
    }
}
