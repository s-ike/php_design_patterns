<?php

namespace FactoryMethod\Products;

use FactoryMethod\Products\Interfaces\ProductInterface;

class IDCard implements ProductInterface
{
    protected $id;
    protected $name;

    public function __construct($array)
    {
        $this->id   = $array['id'];
        $this->name = $array['name'];
    }

    public function getInfo()
    {
        $result = "ID card info - ID: $this->id, Name: $this->name";

        return $result;
    }
}
