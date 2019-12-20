<?php

namespace Mediator;

use Mediator\Form;

class Input
{
    private $form;
    private $name;
    private $value;

    public function __construct(string $name, string $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function setForm(Form $form) :void
    {
        $this->form = $form;
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
