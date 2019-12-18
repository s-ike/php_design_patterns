<?php

namespace Interpreter\Context;

class Context
{
    private $commands;
    private $index = 0;

    public function __construct(string $path)
    {
        if ($fp = fopen($path, 'r')) {
            $this->toCommands($fp);
        } else {
            throw new \Exception('Failed to load file.');
        }
    }

    private function toCommands($fp)
    {
        while (($array = fgetcsv($fp)) !== false) {
            // Unnecessary lines
            if (! array_diff($array, [''])
            || ! array_diff($array, ['command'])) {
                continue;
            }
            $this->commands[] = trim($array[0]);
        }
    }

    public function next() :Context
    {
        $this->index++;
        return $this;
    }

    public function getCommand() :?string
    {
        if (! array_key_exists($this->index, $this->commands)) {
            return null;
        }
        return $this->commands[$this->index];
    }
}
