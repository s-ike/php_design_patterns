<?php

namespace Composite\Component;

abstract class FileSystem
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    abstract public function add(FileSystem $file);

    public function display()
    {
        echo sprintf("%s<br>\n", $this->getName());
    }
}
