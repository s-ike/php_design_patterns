<?php

namespace Proxy\Proxy;

use Proxy\Subject\Store;
use Proxy\Items\ItemCategory;
use Proxy\Interfaces\StoreInterface;

class ProxyStore implements StoreInterface
{
    private $category;

    public function __construct(ItemCategory $category)
    {
        $this->category = $category;
    }

    public function getProductCategoryName() :string
    {
        return $this->category->getName();
    }

    public function getProductCategoryList() :string
    {
        $store = new Store($this->category);
        return $store->getProductCategoryList();
    }
}
