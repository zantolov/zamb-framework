<?php

namespace Seed;


use Zantolov\Zamb\Example\Ecommerce\Seed\ProductsSeeder;

class Seeder
{

    public static function seed()
    {
        UserSeeder::seed();
        ProductsSeeder::seed();
    }

}