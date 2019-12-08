<?php

namespace Bridge\Managers;

use Bridge\Methods\SortImple;

abstract class Sorter
{
    private $sortimple;

    public function __construct(SortImple $sortimple)
    {
        $this->sortimple = $sortimple;
    }

    public function sort(array $array) :array
    {
        return $this->sortimple->sort($array);
    }
}
