<?php

namespace Definition;

use Bundle\AuthBundle\Model\Role;
use Bundle\AuthBundle\Model\User;
use Zantolov\Zamb\Admin\ZambAdminExtension;
use \Zantolov\Zamb\Core\Application\ContainerModifierInterface;
use Pimple\Container;
use Zantolov\Zamb\Core\Proxy\Repo;

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

        $container->offsetSet('repo.users', function ($c) {
            return Repo::get(User::class);
        });

        $container->offsetSet('repo.roles', function ($c) {
            return Repo::get(Role::class);
        });

        // Define dependencies from extensions
        ZambAdminExtension::defineDependencies($container);


    }

}
