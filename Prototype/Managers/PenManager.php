<?php

namespace Prototype\Managers;

use Prototype\Products\Prototypes\PenProduct;

class PenManager
{
    private $pen_list;

    public function __construct()
    {
        $this->pen_list = [];
    }

    public function register(string $name, PenProduct $proto)
    {
        $this->pen_list[$name] = $proto;
    }

    public function create(string $protoname) :PenProduct
    {
        if (! array_key_exists($protoname, $this->pen_list)) {
            throw new Exception(sprintf('No registration with the requested %s name exists.', $protoname));
        }
        $product = $this->pen_list[$protoname];
        return $product->createClone();
    }
}
