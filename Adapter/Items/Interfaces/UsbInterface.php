<?php

namespace Adapter\Items\Interfaces;

interface UsbInterface
{
    public function getPower(int $amount);
    public function getConnectorName();
}
