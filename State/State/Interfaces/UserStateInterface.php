<?php

namespace State\State\Interfaces;

interface UserStateInterface
{
    public function nextState();
    public function getStatus();
    public function isAuthenticated();
    public function createAuthMenu();
}
