<?php

namespace Visitor\Composite;

use Visitor\Component\FileSystem;

class Dir extends FileSystem
{
    private $files;

    public function __construct($name)
    {
        parent::__construct($name);
        $this->files = [];
    }

    public function add(FileSystem $file) :void
    {
        $this->files[] = $file;
    }

    public function getChildren() :array
    {
        return $this->files;
    }
}
