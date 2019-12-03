<?php

namespace Builder\Director;

use Builder\Builder\Interfaces\PeopleBuilderInterface;

class PeopleDirector
{
    private $builder;

    public function __construct(PeopleBuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function getPeople()
    {
        return $this->builder->getResult();
    }
}
