<?php

namespace MediatorMementoObserver\Observer\Observers\Interfaces;

use MediatorMementoObserver\Observer\Subjects\Board;
use MediatorMementoObserver\Observer\Subjects\Interfaces\SubjectInterface;

interface BoardObserverInterface
{
    public function update(Board $board) :string;
}
