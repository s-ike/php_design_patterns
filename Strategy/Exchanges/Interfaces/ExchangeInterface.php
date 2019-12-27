<?php

namespace Strategy\Exchanges\Interfaces;

interface ExchangeInterface
{
    public function currencyConversion() :float;
    public function getCode() :string;
}
