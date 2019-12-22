<?php

namespace MediatorMementoObserver\Observer\Observers;

use MediatorMementoObserver\Observer\Subjects\Board;
use MediatorMementoObserver\Observer\Observers\Interfaces\BoardObserverInterface;

class MessageListener implements BoardObserverInterface
{
    public function update(Board $board) :string
    {
        $items = $board->getItems();
        if (isset($items['comment']) && $items['comment'] !== '') {
            return sprintf('Success: Add "%s"', $items['comment']);
        }
        return '';
    }
}
