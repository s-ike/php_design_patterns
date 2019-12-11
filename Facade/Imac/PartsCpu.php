<?php

namespace Facade\Imac;

use Facade\Imac\Item;
use Facade\Imac\Parts;

class PartsCpu extends Parts
{
    public function __construct()
    {
        $this->items = [
            1 => new Item(1, '3.0GHz', 0),
            2 => new Item(2, '3.1GHz', 12000),
            3 => new Item(3, '3.7GHz', 55000),
        ];
    }
}
