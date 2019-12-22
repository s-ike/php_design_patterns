<?php

namespace MediatorMementoObserver\Observer\Subjects\Interfaces;

use MediatorMementoObserver\Observer\Observers\Interfaces\BoardObserverInterface;

interface SubjectInterface
{
    public function addObserver(BoardObserverInterface $observer) :void;
    public function removeObserver(BoardObserverInterface $observer) :void;
    public function notify() :void;
}
