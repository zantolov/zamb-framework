<?php

namespace Definition;

use Zantolov\Zamb\Admin\ZambAdminExtension;
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
    public static function defineDependencies(Container $container)
    {
        $container['database.params'] = array(
            'driver'   => 'pdo_mysql',
            'user'     => 'root',
            'password' => '',
            'dbname'   => 'foo',
        );

        // Define dependencies from extensions
        ZambAdminExtension::defineDependencies($container);
        \Zantolov\Zamb\Example\Admin\Dependencies::defineDependencies($container);
    }

}
