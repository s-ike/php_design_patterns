<?php

namespace Visitor\Component;

use Visitor\Visitors\Interfaces\VisitorInterface;

abstract class FileSystem
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName() :string
    {
        return $this->name;
    }

    abstract public function add(FileSystem $file) :void;

    abstract public function getChildren() :array;

    public function accept(VisitorInterface $visitor) :void
    {
        $visitor->visit($this);
    }
}
