<?php

namespace Flyweight\Factories;

use Flyweight\Items\Char;
use Flyweight\Factories\CharFactory;

class CharFactory
{
    private static $instance;
    private $chars;

    private function __construct()
    {
        $this->chars = [];
    }

    public static function getInstance() :CharFactory
    {
        if (empty(self::$instance)) {
            self::$instance = new CharFactory();
        }
        return self::$instance;
    }

    public function addChar(string $char) :void
    {
        $char = $char[0];
        if (! array_key_exists($char, $this->getChars())) {
            $this->chars[$char] = new Char($char);
        }
    }

    public function getChars() :array
    {
        return $this->chars;
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
