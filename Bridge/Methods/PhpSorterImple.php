<?php

namespace Bridge\Methods;

use Bridge\Methods\SortImple;

class PhpSorterImple extends SortImple
{
    public function sort(array $array) :array
    {
        asort($array);
        return $array;
    }
}
