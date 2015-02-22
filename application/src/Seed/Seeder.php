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
        RoleSeeder::seed();
        print "Seeded roles \n";
        UserSeeder::seed();
        print "Seeded users \n";
        ProductsSeeder::seed();
        print "Seeded products \n";
        PostsSeeder::seed();
        print "Seeded posts \n";
        TagsSeeder::seed();
        print "Seeded tags \n";
        PostsTagsSeeder::seed();
        print "Seeded posts_tags \n";
    }

}