<?php

namespace MediatorMementoObserver\Memento\Originator;

use MediatorMementoObserver\Memento\Memento\Memento;

class Originator extends Memento
{
    private $comments;

    public function __construct()
    {
        $this->comments = [];
    }

    public function createMemento()
    {
        return new Memento($this->comments);
    }

    public function restoreMemento(Memento $memento)
    {
        $this->comments = $memento->getComments();
    }

    public function addComment(string $comment)
    {
        $this->comments[] = $comment;
    }

    public function getComments() :array
    {
        return $this->comments;
    }
}
