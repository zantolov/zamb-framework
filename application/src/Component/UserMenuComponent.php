<?php

namespace Component;

use Zantolov\Zamb\Admin\Proxy\Auth;
use Zantolov\Zamb\Core\Component\ComponentInterface;

class UserMenuComponent implements ComponentInterface
{

    public function render()
    {
        $user = Auth::getLoggedUser();

        return \View::render('Component/UserMenuComponent/default.html.twig', array('user' => $user));
    }

}