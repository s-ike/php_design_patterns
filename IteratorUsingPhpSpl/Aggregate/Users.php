<?php

namespace IteratorUsingPhpSpl\Aggregate;

use ArrayObject;
use IteratorAggregate;
use IteratorUsingPhpSpl\User;

class Users implements IteratorAggregate
{
    private $users;

    public function __construct()
    {
        $this->users = new ArrayObject();
    }

    public function add(User $user) :void
    {
        $this->users[] = $user;
    }

    public function getUsers() :ArrayObject
    {
        return $this->users;
    }

    /**
     * return ArrayIterator
     *
     * @return ArrayIterator
     */
    public function getIterator()
    {
        return $this->users->getIterator();
    }
}
