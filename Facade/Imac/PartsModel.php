<?php

namespace Facade\Imac;

use Facade\Imac\Item;
use Facade\Imac\Parts;

class PartsModel extends Parts
{
    public function __construct()
    {
        $this->items = [
            1 => new Item(1, '21.5inch', 120800),
            2 => new Item(2, '27inch', 198800),
        ];
    }
}
