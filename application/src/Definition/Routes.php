<?php

namespace Definition;

use Bundle\AdminBundle\Controller\CRUDResourceController;
use Bundle\AuthBundle\Controller\LoginController;
use Controller\SiteController;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;
use Zantolov\Zamb\Admin\ZambAdminExtension;
use Zantolov\Zamb\Core\Application\RoutesModifierInterface;
use Zantolov\Zamb\Core\Factory\RouteFactory;
use Zantolov\Zamb\Example\Blog\Controller\PostsResourceController;
use Zantolov\Zamb\Example\Blog\Controller\TagsResourceController;
use Zantolov\Zamb\Example\Ecommerce\Controller\ProductResourceController;

class Routes implements RoutesModifierInterface
{

    public static function defineRoutes(RouteCollection $routes, $prefix = null)
    {
        // Add routes here

        $routes->add('createPost', new Route('/create/', array(
                '_controller' => '\TestController::createAction',
            ))
        );


        $routes->add('listPosts', new Route('/list/', array(
                '_controller' => '\TestController::listAction',
            ))
        );

        $routes->add(
            '/posts', new Route('/posts/', array(
                '_controller' => '\Zantolov\Zamb\Admin\Example\Controller\PostsAdminController::indexAction'
            ))
        );

        $routes->add(
            '/posts', new Route('/posts/{id}/tags', array(
                '_controller' => '\Zantolov\Zamb\Admin\Example\Controller\PostsAdminController::postTagsAction'
            ))
        );

        // Products
        $routes->addCollection(RouteFactory::make('/products', RouteFactory::TYPE_RESOURCE,
            array('name' => 'resources.products', '_controller' => ProductResourceController::class))
        );

        // Posts
        $routes->addCollection(RouteFactory::make('/posts', RouteFactory::TYPE_RESOURCE,
            array('name' => 'resources.posts', '_controller' => PostsResourceController::class))
        );

        // Posts
        $routes->addCollection(RouteFactory::make('/tags', RouteFactory::TYPE_RESOURCE,
            array('name' => 'resources.tags', '_controller' => TagsResourceController::class))
        );

        // Login
        $routes->addCollection(RouteFactory::make('/login', RouteFactory::TYPE_METHOD_PREFIX,
            array('name' => 'login', '_controller' => LoginController::class, 'action' => 'LoginAction', 'methods' => array('POST', 'GET')))
        );

        // Register
        $routes->addCollection(RouteFactory::make('/register', RouteFactory::TYPE_METHOD_PREFIX,
            array('name' => 'register', '_controller' => LoginController::class, 'action' => 'RegisterAction', 'methods' => array('POST', 'GET')))
        );

        // Admin
        $routes->add('admin.dashboard', RouteFactory::make('/admin')
            ->setDefault('_controller', CRUDResourceController::class . '::indexAction')
            ->setMethods(array('GET'))
        );

        $routes->add('logout.get', RouteFactory::make('/logout')
            ->setDefault('_controller', LoginController::class . '::getLogoutAction')
            ->setMethods(array('GET'))
        );

        $routes->add('get.status', RouteFactory::make('/status')
            ->setDefault('_controller', LoginController::class . '::getUserStatusAction')
            ->setMethods(array('GET'))
        );

        // } Login routes end


        $routes->add('home', new Route('/', array(
                '_controller' => SiteController::class . '::indexAction',
            ))
        );

        // Load routes from Extensions
        ZambAdminExtension::defineRoutes($routes, 'admin');
//      Custom routes instead of example
//      \Zantolov\Zamb\Example\Admin\Routes::defineRoutes($routes, 'admin');

    }
}
