<?php

namespace Definition;

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;
use Zantolov\Zamb\Core\Application\RoutesModifierInterface;

class Routes implements RoutesModifierInterface
{

    public function defineRoutes(RouteCollection $routes)
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

        return $routes;
    }
}
