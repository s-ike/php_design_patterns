<?php

namespace Proxy\Subject;

use Proxy\Items\Items;
use Proxy\Items\ItemCategory;
use Proxy\Interfaces\StoreInterface;

class Store implements StoreInterface
{
    private $category;
    private $items;

    public function __construct(ItemCategory $category)
    {
        $this->category = $category;
        $this->items = new Items($category);
    }

    public function getProductCategoryName() :string
    {
        return $this->category->getName();
    }

    public function getProductCategoryList() :string
    {
        $result = '<ul>';
        foreach ($this->items->getItems() as $key => $value) {
            if ($key === 'models') {
                foreach ($value as $model) {
                    $result .= sprintf('<li>model : %s</li>', $model);
                }
            } else {
                $result .= sprintf('<li>%s : %s</li>', $key, $value);
            }
        }
        $result .= '</ul>';
        return $result;
    }
}
