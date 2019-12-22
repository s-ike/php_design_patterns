<?php

namespace Observer\Observers;

use Observer\Subjects\Board;
use Observer\Observers\Interfaces\BoardObserverInterface;

class MessageListener implements BoardObserverInterface
{
    public function update(Board $board) :string
    {
        $items = $board->getItems();
        return sprintf('Success: Add "%s"', $items['comment']);
    }
}
