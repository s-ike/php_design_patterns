<?php

namespace App\Cars\Products\Impreza;

use App\Cars\Products\Interfaces\TireInterface;
use App\Cars\Items\Impreza\TireItem;

class ImprezaTire implements TireInterface
{
    protected $model;
    protected $item;
    protected $records;

    public function __construct()
    {
        $this->model = 'Impreza';
        $this->item = 'Tire';

        $this->records = array(
            1 => array(
                'id'    => 1,
                'name'  => "Tire for $this->model",
                'model' => $this->model
            ),
            2 => array(
                'id'    => 2,
                'name'  => "Wheel for $this->model",
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
                $part_list[] = new TireItem(
                    $parts['id'], $parts['name'], $parts['model']
                );
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
