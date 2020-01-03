<?php

namespace State\State;

use State\State\AuthorizedState;
use State\State\Interfaces\UserStateInterface;

class UnauthorizedState implements UserStateInterface
{
    private static $instance = null;

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new UnauthorizedState();
        }
        return self::$instance;
    }

    public function nextState()
    {
        return AuthorizedState::getInstance();
    }

    public function getStatus() :string
    {
        return 'Logout';
    }

    public function isAuthenticated() :bool
    {
        return false;
    }

    public function createAuthMenu() :string
    {
        return '<input type="submit" name="status" value="login">'.PHP_EOL;
    }

    final public function __clone()
    {
        throw new \Exception('This Instance is Not Clone');
    }
}
