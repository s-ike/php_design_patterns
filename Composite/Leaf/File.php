<?php

namespace Composite\Leaf;

use Composite\Component\FileSystem;

class File extends FileSystem
{
    public function add(FileSystem $file)
    {
        throw new \Exception('This method is not allowed.');
    }
}
