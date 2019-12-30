<?php

namespace TemplateMethod\Templates;

abstract class AbstractDisplay
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getData() :array
    {
        return $this->data;
    }

    public function display() :void
    {
        echo $this->createHeader(), PHP_EOL;
        echo $this->createBody(), PHP_EOL;
        echo $this->createFooter(), PHP_EOL;
    }

    abstract public function createHeader() :string;
    abstract public function createBody() :string;
    abstract public function createFooter() :string;
}
