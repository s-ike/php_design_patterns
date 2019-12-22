<?php

namespace Observer\Subjects;

use Observer\Subjects\Interfaces\SubjectInterface;
use Observer\Observers\Interfaces\BoardObserverInterface;

class Board implements SubjectInterface
{
    private $observers;
    private $items;
    private $results;

    public function __construct()
    {
        $this->observers = [];
        $this->items = [];
        $this->results = [];
    }

    public function addItem(string $key, string $value) :void
    {
        $this->items[$key] = $value;
        $this->notify();
    }

    public function getItems() :array
    {
        return $this->items;
    }

    public function getResults() :array
    {
        return $this->results;
    }

    public function addObserver(BoardObserverInterface $observer) :void
    {
        $this->observers[get_class($observer)] = $observer;
    }

    public function removeObserver(BoardObserverInterface $observer) :void
    {
        unset($this->observers[get_class($observer)]);
    }

    public function notify() :void
    {
        $results = [];
        foreach ($this->observers as $observer) {
            $results[] = $observer->update($this);
        }
        $this->results = $results;
    }
}
