<?php

namespace Seed;


use Zantolov\Zamb\Example\Blog\Seed\PostsSeeder;
use Zantolov\Zamb\Example\Blog\Seed\PostsTagsSeeder;
use Zantolov\Zamb\Example\Blog\Seed\TagsSeeder;
use Zantolov\Zamb\Example\Ecommerce\Seed\ProductsSeeder;

class Seeder
{

    public static function seed()
    {
        UserSeeder::seed();
        ProductsSeeder::seed();
        PostsSeeder::seed();
        TagsSeeder::seed();
        PostsTagsSeeder::seed();
    }

}