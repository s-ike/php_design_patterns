<?php

namespace AbstractFactory\Cars\Products\Interfaces;

interface TireInterface
{
    public function partList();
    public function assembly();
    public function add();
}
