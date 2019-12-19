<?php

namespace IteratorUsingPhpSpl;

class User
{
    private $name;
    private $age;
    private $job;

    public function __construct(string $name, int $age, string $job)
    {
        $this->name = $name;
        $this->age = $age;
        $this->job = $job;
    }

    public function getName() :string
    {
        return $this->name;
    }

    public function getAge() :int
    {
        return $this->age;
    }

    public function getJob() :string
    {
        return $this->job;
    }
}
