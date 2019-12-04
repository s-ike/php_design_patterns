<?php

namespace FactoryMethod\Factories;

use FactoryMethod\Products\NamePlate;
use FactoryMethod\Factories\Interfaces\FactoryInterface;

class NamePlateFactory implements FactoryInterface
{
    public function create($array)
    {
        return new NamePlate($array);
    }
}
