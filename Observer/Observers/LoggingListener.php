<?php

namespace Observer\Observers;

use Observer\Subjects\Board;
use Observer\Observers\Interfaces\BoardObserverInterface;

class LoggingListener implements BoardObserverInterface
{
    public function update(Board $board) :string
    {
        return sprintf('Log: Add at %s', date('Y/m/d H:i:s'));
    }
}
