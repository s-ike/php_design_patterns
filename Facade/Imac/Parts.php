<?php

namespace Facade\Imac;

use Facade\Imac\Item;
use Facade\Imac\Interfaces\PartsInterface;

abstract class Parts implements PartsInterface
{
    protected $items;

    abstract public function __construct();

    public function getItem(int $item_id) :Item
    {
        return $this->items[$item_id];
    }
}
