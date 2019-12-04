<?php

namespace FactoryMethod\Factories;

use FactoryMethod\Products\IDCard;
use FactoryMethod\Factories\Interfaces\FactoryInterface;

class IDCardFactory implements FactoryInterface
{
    public function create($array)
    {
        return new IDCard($array);
    }
}
