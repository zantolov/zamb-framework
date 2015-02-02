<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

abstract class RouteManager
{

    /**
     * Define your routes here. See Symfony documentation on routing
     * @return RouteCollection
     */
    public static function defineRoutes()
    {
        $routes = new RouteCollection();
        $routes->add('home', new Route('/{name}/{last}', array(
            '_controller' => 'TestController::indexAction',
            'name' => '123',
        )));

        return $routes;
    }

}


