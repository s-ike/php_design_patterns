<?php

namespace Adapter\Items;

use Adapter\Items\Interfaces\UsbInterface;

class UsbTypeA implements UsbInterface
{
    public function getPower(int $amount) :string
    {
        return sprintf('getting %dmA', $amount);
    }

    public function getConnectorName() :string
    {
        return 'USB type A';
    }

    public function getInfo() :string
    {
        return sprintf('This connector is %s.', $this->getPower(500));
    }
}
