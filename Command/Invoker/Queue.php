<?php

namespace Command\Invoker;

use Command\Interfaces\CommandInterface as Command;

class Queue
{
    private $commands;
    private $records;

    public function __construct()
    {
        $this->commands = [];
        $this->records = [];
    }

    public function addCommand(Command $command)
    {
        $this->commands[] = $command;
    }

    public function run() :array
    {
        if (! empty($this->commands)) {
            foreach ($this->commands as $command) {
                $this->records[] = $command->execute();
            }
            $this->commands = [];
        }
        return $this->records;
    }

    public function undo() :void
    {
        if (! empty($this->commands)) {
            $command = array_pop($this->commands);
        }
    }

    public function getQueue() :array
    {
        $current_commands = [];

        if (! empty($this->commands)) {
            foreach ($this->commands as $command) {
                $current_commands[] = $command->execute();
            }
        }
        return $current_commands;
    }
}
