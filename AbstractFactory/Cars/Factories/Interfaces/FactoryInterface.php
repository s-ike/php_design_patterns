<?php

namespace AbstractFactory\Cars\Factories\Interfaces;

interface FactoryInterface
{
    public function engine();
    public function tire();
    public function handle();
}
