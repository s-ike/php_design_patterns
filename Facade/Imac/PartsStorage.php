<?php

namespace Facade\Imac;

use Facade\Imac\Item;
use Facade\Imac\Parts;

class PartsStorage extends Parts
{
    public function __construct()
    {
        $this->items = [
            1 => new Item(1, '1TB FusionDrive', 0),
            2 => new Item(2, '2TB FusionDrive', 22000),
            3 => new Item(3, '256GB SSD', 11000),
            4 => new Item(4, '512GB SSD', 33000),
            5 => new Item(5, '1TB SSD', 55000),
        ];
    }
}
