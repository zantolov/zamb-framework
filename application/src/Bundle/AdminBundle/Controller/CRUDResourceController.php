<?php

namespace Bundle\AdminBundle\Controller;

use Zantolov\Zamb\Core\Proxy\View;

class CRUDResourceController
{

    public function indexAction()
    {
        return View::render('@bundle/AdminBundle/View/dashboard.html.twig');
    }

}