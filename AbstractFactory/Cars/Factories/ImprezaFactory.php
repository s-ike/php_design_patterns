<?php

namespace AbstractFactory\Cars\Factories;

use AbstractFactory\Cars\Factories\Interfaces\FactoryInterface;
use AbstractFactory\Cars\Products\Impreza\ImprezaEngine;
use AbstractFactory\Cars\Products\Impreza\ImprezaTire;
use AbstractFactory\Cars\Products\Impreza\ImprezaHandle;

class ImprezaFactory implements FactoryInterface
{
    public function engine()
    {
        return new ImprezaEngine();
    }

    public function tire()
    {
        return new ImprezaTire();
    }

    public function handle()
    {
        return new ImprezaHandle();
    }
}
