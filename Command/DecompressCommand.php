<?php

namespace Command;

use Command\Receiver\File;
use Command\Interfaces\CommandInterface;

class DecompressCommand implements CommandInterface
{
    private $file;

    public function __construct(File $file)
    {
        $this->file = $file;
    }

    public function execute() :string
    {
        return $this->file->decompress();
    }
}
