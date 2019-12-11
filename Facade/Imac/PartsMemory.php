<?php

namespace Facade\Imac;

use Facade\Imac\Item;
use Facade\Imac\Parts;

class PartsMemory extends Parts
{
    public function __construct()
    {
        $this->items = [
            1 => new Item(1, '8GB', 0),
            2 => new Item(2, '16GB', 22000),
            3 => new Item(3, '32GB', 66000),
        ];
    }
}
