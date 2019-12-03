<?php

namespace Builder\Builder;

use Builder\People\People;
use Builder\Builder\Interfaces\PeopleBuilderInterface;

class AmericanBuilder implements PeopleBuilderInterface
{
    private $people;

    public function __construct()
    {
        $this->people = new People('American', 'Eglish');
    }

    public function getResult()
    {
        return $this->people;
    }
}
