<?php

namespace MediatorMementoObserver\Mediator;

use MediatorMementoObserver\Mediator\Form;

class Input
{
    private $name;
    private $value;

    public function __construct(string $key, string $value)
    {
        $this->name = $key;
        $this->value = $value;
    }

    public function getName() :string
    {
        return $this->name;
    }

    public function getValue() :string
    {
        return $this->value;
    }
}
