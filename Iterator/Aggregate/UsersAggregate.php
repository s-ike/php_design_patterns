<?php

namespace Iterator\Aggregate;

use Iterator\Iterator\UserListIterator;
use Iterator\Aggregate\Interfaces\AggregateInterface;

class UsersAggregate implements AggregateInterface
{
    private $user_list;

    public function __construct(array $users)
    {
        $this->user_list = $users;
    }

    public function addUser($user)
    {
        $this->user_list[] = $user;
    }

    public function getUserList()
    {
        return $this->user_list;
    }

    public function iterator() :UserListIterator
    {
        return new UserListIterator($this->user_list);
    }
}
