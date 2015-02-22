<?php

namespace Bundle\AuthBundle\Controller;

use Bundle\AuthBundle\Model\Role;
use Bundle\AuthBundle\Model\User;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Zantolov\Zamb\Core\Proxy\Repo;
use Zantolov\Zamb\Core\Proxy\UrlGenerator;
use Zantolov\Zamb\Example\Admin\Controller\AuthController;

class LoginController extends AuthController
{

    /**
     * @return Role
     */
    protected function getDefaultRole()
    {
        return Repo::get(Role::class)->findOneBy(array('name' => 'user'));
    }


    /**
     * @return User
     */
    protected function getUser()
    {
        return new User();
    }


    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getLoginAction()
    {
        return \View::response('@bundle/AuthBundle/View/login-page.html.twig');
    }


    protected function redirectToLogin()
    {
        return new RedirectResponse(UrlGenerator::generate('login.get'));
    }
}
