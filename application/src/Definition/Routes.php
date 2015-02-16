<?php

namespace Definition;

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;
use Zantolov\Zamb\Admin\ZambAdminExtension;
use Zantolov\Zamb\Core\Application\RoutesModifierInterface;

class Routes implements RoutesModifierInterface
{

    public static function defineRoutes(RouteCollection $routes, $prefix = null)
    {
        // Add routes here
        $routes->add('home', new Route('/{name}', array(
                '_controller' => '\TestController::indexAction',
                'name'        => 'World'
            ))
        );

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

        // Load routes from Extensions
        ZambAdminExtension::defineRoutes($routes, 'admin');
        \Zantolov\Zamb\Example\Admin\Routes::defineRoutes($routes, 'admin');

    }
}
