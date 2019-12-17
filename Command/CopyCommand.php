<?php

namespace Command;

use Command\Receiver\File;
use Command\Interfaces\CommandInterface;

class CopyCommand implements CommandInterface
{
    private $file;

    public function __construct(File $file)
    {
        $this->file = $file;
    }

    public function execute() :string
    {
        $copy_file = new File(sprintf('copy_%s', $this->file->getName()));
        return $copy_file->create();
    }
}
