<?php

namespace Iterator\Iterator\Interfaces;

interface IteratorInterface
{
    public function hasNext() :bool;
    public function next();
}
