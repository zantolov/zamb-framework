<?php

namespace Bundle\AuthBundle\Component;

use Zantolov\Zamb\Core\Component\ComponentInterface;

class LoginFormComponent implements ComponentInterface
{

    public function render()
    {
        return \View::render('@admin/login-form.html.twig', array());
    }


}