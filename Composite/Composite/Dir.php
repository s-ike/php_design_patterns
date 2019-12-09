<?php

namespace Composite\Composite;

use Composite\Component\FileSystem;

class Dir extends FileSystem
{
    private $files;

    public function __construct($name)
    {
        parent::__construct($name);
        $this->files = [];
    }

    public function add(FileSystem $file)
    {
        $this->files[] = $file;
    }

    public function display()
    {
        parent::display();
        foreach ($this->files as $file) {
            echo $file->display();
        }
    }
}
