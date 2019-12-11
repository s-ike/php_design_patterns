<?php

namespace Facade\Imac;

use Facade\Imac\PartsCpu;
use Facade\Imac\TotalFee;
use Facade\Imac\PartsModel;
use Facade\Imac\PartsMemory;
use Facade\Imac\PartsStorage;

class ImacFacade
{
    private $parts_model;
    private $parts_cpu;
    private $parts_memory;
    private $parts_storage;
    private $total_fee;
    private $choose_list;

    public function __construct()
    {
        $this->parts_model      = new PartsModel();
        $this->parts_cpu        = new PartsCpu();
        $this->parts_memory     = new PartsMemory();
        $this->parts_storage    = new PartsStorage();
        $this->total_fee        = new TotalFee();
        $this->choose_list      = [];
    }

    public function chooseModel(int $id) :void
    {
        $item = $this->parts_model->getItem($id);
        $this->choose_list['model'] = $item;
        $this->total_fee->add($item->getPrice());
    }

    public function chooseCpu(int $id) :void
    {
        $item = $this->parts_cpu->getItem($id);
        $this->choose_list['cpu'] = $item;
        $this->total_fee->add($item->getPrice());
    }

    public function chooseMemory(int $id) :void
    {
        $item = $this->parts_memory->getItem($id);
        $this->choose_list['memory'] = $item;
        $this->total_fee->add($item->getPrice());
    }

    public function chooseStorage(int $id) :void
    {
        $item = $this->parts_storage->getItem($id);
        $this->choose_list['storage'] = $item;
        $this->total_fee->add($item->getPrice());
    }

    public function getChooseItemsUl() :string
    {
        $result = "<ul>\n";
        foreach ($this->choose_list as $item_name => $item) {
            $result .= "<li>$item_name: ".$item->display()."</li>\n";
        }
        $result .= "</ul>\n";
        return $result;
    }

    public function getResult() :string
    {
        $result = $this->getChooseItemsUl();
        $result .= sprintf('Total: %s', $this->total_fee->getTotal());
        return $result;
    }
}
