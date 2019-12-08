<?php

namespace Bridge\Managers;

use Bridge\Managers\Sorter;

class TimeSorter extends Sorter
{
    public function timesort(array $array) :string
    {
        $start = gettimeofday(true);
        $this->sort($array);
        $end = gettimeofday(true);
        return sprintf('Time: %f', $end - $start);
    }
}
