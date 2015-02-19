<?php

namespace Definition;

use Bundle\AuthBundle\Controller\LoginController;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;
use Zantolov\Zamb\Admin\ZambAdminExtension;
use Zantolov\Zamb\Core\Application\RoutesModifierInterface;
use Zantolov\Zamb\Core\Factory\RouteFactory;
use Zantolov\Zamb\Example\Ecommerce\Controller\ProductResourceController;

class Routes implements RoutesModifierInterface
{

    public static function defineRoutes(RouteCollection $routes, $prefix = null)
    {
        // Add routes here

        $routes->add('createPost', new Route('/create/', array(
                '_controller' => '\TestController::createAction',
            ))
        );


        $routes->add('listPosts', new Route('/list/', array(
                '_controller' => '\TestController::listAction',
            ))
        );

        $routes->add(
            '/posts', new Route('/posts/', array(
                '_controller' => '\Zantolov\Zamb\Admin\Example\Controller\PostsAdminController::indexAction'
            ))
        );

        $routes->addCollection(RouteFactory::make('/products', RouteFactory::TYPE_RESOURCE,
            array('name' => 'resources.products', '_controller' => ProductResourceController::class)));

        // Login routes start {
        $routes->add('get.login', RouteFactory::make('/login')
            ->setDefault('_controller', LoginController::class . '::getLoginAction')
            ->setMethods(array('GET'))
        );

        $routes->add('post.login', RouteFactory::make('/login')
            ->setDefault('_controller', LoginController::class . '::postLoginAction')
            ->setMethods(array('POST'))
        );

        $routes->add('get.register', RouteFactory::make('/register')
            ->setDefault('_controller', LoginController::class . '::getRegisterAction')
            ->setMethods(array('GET'))
        );

        $routes->add('post.register', RouteFactory::make('/register')
            ->setDefault('_controller', LoginController::class . '::postRegisterAction')
            ->setMethods(array('POST'))
        );

        $routes->add('get.logout', RouteFactory::make('/logout')
            ->setDefault('_controller', LoginController::class . '::getLogoutAction')
            ->setMethods(array('GET'))
        );

        $routes->add('get.status', RouteFactory::make('/status')
            ->setDefault('_controller', LoginController::class . '::getUserStatusAction')
            ->setMethods(array('GET'))
        );

        // } Login routes end


        $routes->add('home', new Route('/{name}', array(
                '_controller' => '\TestController::indexAction',
                'name'        => 'World'
            ))
        );

        // Load routes from Extensions
        ZambAdminExtension::defineRoutes($routes, 'admin');
//      Custom routes instead of example
//      \Zantolov\Zamb\Example\Admin\Routes::defineRoutes($routes, 'admin');

    }
}
