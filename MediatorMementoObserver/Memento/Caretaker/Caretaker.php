<?php

namespace MediatorMementoObserver\Memento\Caretaker;

use MediatorMementoObserver\Memento\Memento\Memento;

class Caretaker
{
    private $snapshot;

    public function __construct()
    {
        if (! isset($_SESSION)) {
            session_start();
        }
    }

    public function setSnapshot(Memento $snapshot)
    {
        $this->snapshot = $snapshot;
        $_SESSION['snapshot'] = $this->snapshot;
    }

    public function getSnapshot() :?Memento
    {
        return isset($_SESSION['snapshot']) ? $_SESSION['snapshot'] : null;
    }
}
