<?php

namespace Builder\People;

class People
{
    private $nation;
    private $main_language;

    public function __construct($nation, $main_language)
    {
        $this->nation = $nation;
        $this->main_language = $main_language;
    }

    public function getNation()
    {
        return $this->nation;
    }

    public function getMainLanguage()
    {
        return $this->main_language;
    }

    public function hello()
    {
        return "Hello I am a $this->nation. Main language is $this->main_language.";
    }
}
