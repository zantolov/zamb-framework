<?php

namespace Definitions;

use \Zantolov\Zamb\Core\Application\ContainerModifierInterface;
use Pimple\Container;

class Dependencies implements ContainerModifierInterface
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
     * $container->offsetUnset('listener.exception');
     *
     * @param Container $container
     *
     */
    public function defineDependencies(Container $container)
    {

    }

}


