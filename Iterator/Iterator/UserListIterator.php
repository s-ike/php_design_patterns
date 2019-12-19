<?php

namespace Iterator\Iterator;

use Iterator\User;
use Iterator\Iterator\Interfaces\IteratorInterface;

class UserListIterator implements IteratorInterface
{
    private $users;
    private $position = 0;

    public function __construct($users)
    {
        $this->users = $users;
    }

    public function hasNext() :bool
    {
        return isset($this->users[$this->position]);
    }

    public function next()
    {
        $user = $this->users[$this->position];
        $user = new User($user['name'], $user['age']);
        $this->position++;
        return $user;
    }
}
