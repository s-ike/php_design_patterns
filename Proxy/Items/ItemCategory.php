<?php

namespace Proxy\Items;

class ItemCategory
{
    private $name;
    private $item_names = [
        1 => 'MacBook Air',
        2 => 'MacBook Pro 13-inch',
        3 => 'MacBook Pro 16-inch'
    ];

    public function __construct($id)
    {
        $this->name = $this->item_names[$id];
    }

    public function getName() :string
    {
        return $this->name;
    }
}
