<?php

namespace Strategy\Exchanges;

use Strategy\Exchanges\Interfaces\ExchangeInterface;

class DollarExchange implements ExchangeInterface
{
    private $jpy = 0;
    private $rate = 0.0091;
    private $code = 'USD';

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
