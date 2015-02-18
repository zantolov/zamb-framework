<?php

namespace Seed;

use Zantolov\Zamb\Admin\Proxy\Hash;
use Zantolov\Zamb\Core\Application\SeedInterface;
use Zantolov\Zamb\Example\Admin\Model\User;

class UserSeeder implements SeedInterface
{

    public static function seed()
    {
        $user = new User();
        $user->setEmail('admin@example.com');
        $user->setUsername('admin');
        $user->setPassword(Hash::get()->getHash('admin'));

        \EntityManager::persist($user);
        \EntityManager::flush();
    }


}