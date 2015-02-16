<?php

namespace Zantolov\Zamb\Admin\Example\Controller;

use Zantolov\Zamb\Admin\Controller\ProtectedControllerInterface;
use Zantolov\Zamb\Admin\Controller\ProtectedControllerTrait;

class PostsAdminController implements ProtectedControllerInterface
{
    use ProtectedControllerTrait;

    public function isAccessAllowed()
    {
        return isset($_GET['auth']);
    }


    public function indexAction()
    {
        $posts = \EntityManager::get()->getRepository('Post')->findAll();

        $data = array();
        foreach ($posts as $post) {
            $data[] = array($post->id, $post->title, $post->slug, $post->body);
        }

        return new \Symfony\Component\HttpFoundation\JsonResponse($data);
    }

}