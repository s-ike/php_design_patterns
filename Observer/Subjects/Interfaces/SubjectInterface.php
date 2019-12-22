<?php

namespace Observer\Subjects\Interfaces;

use Observer\Observers\Interfaces\BoardObserverInterface;

interface SubjectInterface
{
    public function addObserver(BoardObserverInterface $observer) :void;
    public function removeObserver(BoardObserverInterface $observer) :void;
    public function notify() :void;
}
