<?php

namespace Memento\Memento;

class Memento
{
    private $comments;

    protected function __construct(array $comments)
    {
        $this->comments = $comments;
    }

    protected function getComments() :array
    {
        return $this->comments;
    }
}
