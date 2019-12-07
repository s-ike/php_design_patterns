<?php

namespace Singleton;

class Singleton
{
    private static $instance;

    private $id;     // 同一インスタンス検証用のID

    private function __construct()
    {
        $this->id = hash('sha256', time());
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    public function getId()
    {
        return $this->id;
    }

    final private function __clone()
    {
        throw new \Exception('This Instance is not clone.');
    }
    final private function __wakeup()
    {
        throw new \Exception('This Instance is Not unserialize');
    }
}
