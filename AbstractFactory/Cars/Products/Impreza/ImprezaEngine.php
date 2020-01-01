<?php

namespace AbstractFactory\Cars\Products\Impreza;

use AbstractFactory\Cars\Products\Interfaces\EngineInterface;
use AbstractFactory\Cars\Items\Impreza\EngineItem;

class ImprezaEngine implements EngineInterface
{
    protected $model;
    protected $item;
    protected $records;

    public function __construct()
    {
        $this->model = 'Impreza';
        $this->item = 'Engine';

        $this->records = array(
            1 => array(
                'id'    => 1,
                'name'  => "Engine Parts 01 for $this->model",
                'model' => $this->model
            ),
            2 => array(
                'id'    => 2,
                'name'  => "Engine Parts 02 for $this->model",
                'model' => $this->model
            ),
        );
    }

    public function partList()
    {
        // $part_map = json_decode(file_get_contents($this->json));
        $part_map = $this->records;

        $part_list = [];
        foreach ($part_map as $parts) {
            if ($parts['model'] === $this->model) {
                $part_list[] = new EngineItem($parts['id'], $parts['name'], $parts['model']);
            }
        }
        return $part_list;
    }

    public function assembly()
    {
        $list = '';
        foreach ($this->partList() as $parts) {
            // sprintf — フォーマットされた文字列を返す
            $list .= sprintf(
                "<li>Parts-No.%d %s | Target Model - %s</li>",
                $parts->getId(),
                $parts->getName(),
                $parts->getModel()
            );
        }
        return $list;
    }

    public function add()
    {
        echo "<h2>$this->item</h2>";
        echo "<ul>";
        echo $this->assembly();
        echo "</ul>";
    }
}
