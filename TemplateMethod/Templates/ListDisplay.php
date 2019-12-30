<?php

namespace TemplateMethod\Templates;

use TemplateMethod\Templates\AbstractDisplay;

class ListDisplay extends AbstractDisplay
{
    public function createHeader() :string
    {
        return '<ul>'.PHP_EOL;
    }

    public function createBody() :string
    {
        $html = '';
        foreach ($this->getData() as $value) {
            $html .= '<li>'.$value.'</li>'.PHP_EOL;
        }
        return $html;
    }

    public function createFooter() :string
    {
        return '</ul>'.PHP_EOL;
    }
}
