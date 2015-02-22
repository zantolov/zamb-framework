<?php

namespace Component;

use Zantolov\Zamb\Core\Component\ComponentInterface;

class CartComponent implements ComponentInterface
{
    public function render()
    {
        return \View::render('Component/CartComponent/mini-cart.html.twig');
    }
}