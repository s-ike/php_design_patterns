<?php

namespace Visitor\Leaf;

use Visitor\Component\FileSystem;

class File extends FileSystem
{
    public function add(FileSystem $file) :void
    {
        throw new \Exception('This method is not allowed.');
    }

    public function getChildren() :array
    {
        return array();
    }
}
