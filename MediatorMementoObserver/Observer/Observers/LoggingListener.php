<?php

namespace MediatorMementoObserver\Observer\Observers;

use MediatorMementoObserver\Observer\Subjects\Board;
use MediatorMementoObserver\Observer\Observers\Interfaces\BoardObserverInterface;

class LoggingListener implements BoardObserverInterface
{
    public function update(Board $board) :string
    {
        return sprintf('Log: Add at %s', date('Y/m/d H:i:s'));
    }
}
