<?php

namespace Strategy\Exchanges;

use Strategy\Exchanges\Interfaces\ExchangeInterface;

class PoundExchange implements ExchangeInterface
{
    private $jpy = 0;
    private $rate = 0.0070;
    private $code = 'GBP';

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
