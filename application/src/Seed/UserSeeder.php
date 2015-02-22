<?php

namespace Seed;

use Bundle\AuthBundle\Model\Role;
use Bundle\AuthBundle\Model\User;
use Zantolov\Zamb\Admin\Proxy\Hash;
use Zantolov\Zamb\Core\Application\SeedInterface;
use Zantolov\Zamb\Core\Proxy\EntityManager;

class UserSeeder implements SeedInterface
{

    public static function seed()
    {
        $user = new User();
        $user->setEmail('admin@example.com');
        $user->setUsername('admin');
        $user->setPassword(Hash::get()->getHash('admin'));

        $role = EntityManager::get()->getRepository(Role::class)->findOneBy(array('name' => 'admin'));

        /** @var Role $role */
        //$role->addUser($user);
        $user->setRole($role);

        \EntityManager::persist($user);
        \EntityManager::flush();
    }


}