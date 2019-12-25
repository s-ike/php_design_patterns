<?php

namespace State\State;

use Exception;
use State\State\UnauthorizedState;
use State\State\Interfaces\UserStateInterface;

class AuthorizedState implements UserStateInterface
{
    private static $instance = null;

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new AuthorizedState();
        }
        return self::$instance;
    }

    public function nextState()
    {
        return UnauthorizedState::getInstance();
    }

    public function getStatus() :string
    {
        return 'Login';
    }

    public function isAuthenticated() :bool
    {
        return true;
    }

    public function createAuthMenu() :string
    {
        $html = '<input type="submit" name="status" value="setname">'.PHP_EOL;
        $html .= '<input type="submit" name="status" value="remove">'.PHP_EOL;
        $html .= '<input type="submit" name="status" value="logout">'.PHP_EOL;
        return $html;
    }

    final public function __clone()
    {
        throw new \Exception('This Instance is Not Clone');
    }
}
