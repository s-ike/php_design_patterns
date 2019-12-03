<?php

namespace Builder\Builder;

use Builder\People\People;
use Builder\Builder\Interfaces\PeopleBuilderInterface;

class JapaneseBuilder implements PeopleBuilderInterface
{
    private $people;

    public function __construct()
    {
        $this->people = new People('Japanese', 'Japanese');
    }

    public function getResult()
    {
        return $this->people;
    }
}
