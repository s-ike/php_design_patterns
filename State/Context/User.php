<?php

namespace State\Context;

use State\State\UnauthorizedState;

class User
{
    private $name;
    private $state;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->state = UnauthorizedState::getInstance();
    }

    public function switchState() :void
    {
        $this->state = $this->state->nextState();
    }

    public function getStatus() :string
    {
        return $this->state->getStatus();
    }

    public function isAuthenticated() :bool
    {
        return $this->state->isAuthenticated();
    }

    public function setName(string $name) :void
    {
        $this->name = $name;
    }

    public function getName() :string
    {
        return $this->name;
    }

    public function removeName() :void
    {
        $this->name = 'Anonymous';
    }

    public function createAuthMenu() :string
    {
        return $this->state->createAuthMenu();
    }
}
