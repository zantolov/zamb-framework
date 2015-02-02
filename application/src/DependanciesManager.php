<?php

use Pimple\Container;

class DependanciesManager
{

    /**
     *
     * If you want to modify dependancies stored in DIC, you can do it here like this:
     *
     * $container->extend('dispatcher', function($dispatcher, $c){
     *      $dispatcher->addSubscriber(new DummyService());
     *      $dispatcher->addSubscriber(new DummyServiceLast());
     *      return $dispatcher;
     *   });
     *
     * @param Container $container
     *
     */
    public static function addDependanciesToContainer(Container $container)
    {

    }

}


