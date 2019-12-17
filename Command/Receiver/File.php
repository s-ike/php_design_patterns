<?php

namespace Command\Receiver;

class File
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName() :string
    {
        return $this->name;
    }

    public function decompress() :string
    {
        return sprintf('Decompressed %s file.', $this->getName());
    }

    public function compress() :string
    {
        return sprintf('Compressed %s file.', $this->getName());
    }

    public function create() :string
    {
        return sprintf('Created %s file.', $this->getName());
    }
}
