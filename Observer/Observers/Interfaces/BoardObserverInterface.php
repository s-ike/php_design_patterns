<?php

namespace Observer\Observers\Interfaces;

use Observer\Subjects\Board;
use Observer\Subjects\Interfaces\SubjectInterface;

interface BoardObserverInterface
{
    public function update(Board $board) :string;
}
