<?php

namespace TemplateMethod\Templates;

use TemplateMethod\Templates\AbstractDisplay;

class TableDisplay extends AbstractDisplay
{
    public function createHeader() :string
    {
        $html = '';
        return '<table>'.PHP_EOL;
    }

    public function createBody() :string
    {
        $html = '<tbody>';
        foreach ($this->getData() as $key => $value) {
            $html .= '<tr><th>'.$key.'</th><td>'.$value.'</td></tr>'.PHP_EOL;
        }
        $html .= '</tbody>';
        return $html;
    }

    public function createFooter() :string
    {
        return '</table>'.PHP_EOL;
    }
}
