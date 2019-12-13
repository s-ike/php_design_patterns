<?php

namespace Proxy\Items;

use Proxy\Items\ItemCategory;

class Items
{
    private $items;
    private $all_items = [
        1 => [
            'name' => 'MacBook Air',
            'models' => [
                '1.6GHz Dual-Core Processor with Turbo Boost up to 3.6GHz 128GB Storage Touch ID',
                '1.6GHz Dual-Core Processor with Turbo Boost up to 3.6GHz 256GB Storage Touch ID'
            ]
        ],
        2 => [
            'name' => 'MacBook Pro 13-inch',
            'models' => [
                '1.4GHz Quad-Core Processor with Turbo Boost up to 3.9GHz 128GB Storage Touch Bar and Touch ID',
                '1.4GHz Quad-Core Processor with Turbo Boost up to 3.9GHz 256GB Storage Touch Bar and Touch ID',
                '2.4GHz Quad-Core Processor with Turbo Boost up to 4.1GHz 256GB Storage Touch Bar and Touch ID'
            ]
        ],
        3 => [
            'name' => 'MacBook Pro 16-inch',
            'models' => [
                '2.6GHz 6-Core Processor 512GB Storage AMD Radeon Pro 5300M',
                '2.3GHz 8-Core Processor 1TB Storage AMD Radeon Pro 5500M'
            ]
        ],
    ];

    public function __construct(ItemCategory $category)
    {
        foreach ($this->all_items as $id => $items) {
            if ($items['name'] === $category->getName()) {
                $this->items = $items;
            }
        }

        if (! $this->items) {
            throw new \Exception('This catefory is not found.');
        }
    }

    public function getItems() :array
    {
        return $this->items;
    }
}
