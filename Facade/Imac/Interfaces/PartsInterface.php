<?php

namespace Facade\Imac\Interfaces;

use Facade\Imac\Item;

interface PartsInterface
{
    public function __construct();
    public function getItem(int $item_id) :Item;
}
