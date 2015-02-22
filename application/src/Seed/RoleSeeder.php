<?php

namespace Seed;

use Bundle\AuthBundle\Model\Role;
use Zantolov\Zamb\Core\Application\SeedInterface;

class RoleSeeder implements SeedInterface
{

    public static function seed()
    {

        $roleAdmin = new Role();
        $roleAdmin->setName('admin');
        \EntityManager::persist($roleAdmin);

        $roleUser = new Role();
        $roleUser->setName('user');
        \EntityManager::persist($roleUser);

        \EntityManager::flush();
    }


}