<?php

namespace FactoryMethod\Products;

use FactoryMethod\Products\Interfaces\ProductInterface;

class NamePlate implements ProductInterface
{
    protected $name;

    public function __construct($array)
    {
        $this->name = $array['name'];
    }

    public function getInfo()
    {
        $result = "Nameplate info - Name: $this->name";

        return $result;
    }
}
