<?php

namespace Bundle\AuthBundle\Controller;

use Bundle\AuthBundle\Model\User;
use Zantolov\Zamb\Example\Admin\Controller\AuthController;

class LoginController extends AuthController
{
    protected function getUser()
    {
        return new User();
    }
}
