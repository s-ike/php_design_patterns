<?php

namespace Adapter\Items;

use Adapter\Items\UsbTypeA;
use Adapter\Items\Interfaces\AudioConnectorInterface;

class UsbTypeC extends UsbTypeA implements AudioConnectorInterface
{
    public function getVideo(string $title) :string
    {
        return sprintf('playing %s', $title);
    }

    public function getConnectorName() :string
    {
        return 'USB type C';
    }

    public function getInfo() :string
    {
        $result = sprintf('This connector is %s.', $this->getVideo('Cinema'));
        $result .= "\n";
        $result .= sprintf('This connector is %s.', $this->getPower(900));

        return $result;
    }
}
