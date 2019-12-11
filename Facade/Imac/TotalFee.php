<?php

namespace Facade\Imac;

class TotalFee
{
    private $total = 0;

    public function add(int $price) :void
    {
        $this->total += $price;
    }

    public function getTotal() :string
    {
        return sprintf('¥%s-', number_format($this->total));
    }
}
