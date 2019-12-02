<?php
namespace App\Cars\Factories;

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
// require_once 'App/Cars/Factories/Interfaces/FactoryInterface.php';
// require_once 'App/Cars/Products/Impreza/ImprezaEngine.php';
use App\Cars\Factories\Interfaces\FactoryInterface;
use App\Cars\Products\Impreza\ImprezaEngine;
use App\Cars\Products\Impreza\ImprezaTire;
use App\Cars\Products\Impreza\ImprezaHandle;

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
