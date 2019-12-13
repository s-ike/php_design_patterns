<?php

namespace Proxy\Interfaces;

use Proxy\Items\ItemCategory;

interface StoreInterface
{
    public function __construct(ItemCategory $category);
    public function getProductCategoryName() :string;
    public function getProductCategoryList() :string;
}
