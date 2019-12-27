<?php

namespace Strategy\Exchanges;

use Strategy\Exchanges\Interfaces\ExchangeInterface;

class EuroExchange implements ExchangeInterface
{
    private $jpy = 0;
    private $rate = 0.0082;
    private $code = 'EUR';

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
