<?php

namespace AbstractFactory\Cars\Products\Interfaces;

interface HandleInterface
{
    public function partList();
    public function assembly();
    public function add();
}
