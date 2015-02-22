<?php

namespace Component;

use Zantolov\Zamb\Core\Component\ComponentInterface;

class HeaderComponent implements ComponentInterface
{

    public function render()
    {
        return \View::render('Component/HeaderComponent/default-header.html.twig', array());
    }

}