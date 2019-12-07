<?php

namespace Adapter\Items;

use Adapter\Items\Interfaces\AudioConnectorInterface;

class Hdmi implements AudioConnectorInterface
{
    public function getVideo(string $title) :string
    {
        return sprintf('playing %s', $title);
    }

    public function getConnectorName() :string
    {
        return 'HDMI';
    }

    public function getInfo() :string
    {
        return sprintf('This connector is %s.', $this->getVideo('Anime'));
    }
}
