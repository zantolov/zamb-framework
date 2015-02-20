<?php

namespace Zantolov\Zamb\Admin\Example\Controller;

use Zantolov\Zamb\Admin\Controller\ProtectedControllerInterface;
use Zantolov\Zamb\Admin\Controller\ProtectedControllerTrait;
use Zantolov\Zamb\Example\Blog\Model\Post;

class PostsAdminController implements ProtectedControllerInterface
{
    use ProtectedControllerTrait;

    public function isAccessAllowed()
    {
        return isset($_GET['auth']);
    }


    public function indexAction()
    {
        $posts = \EntityManager::get()->getRepository(Post::class)->findAll();

        return new \Symfony\Component\HttpFoundation\JsonResponse($posts);
    }

    public function postTagsAction($id)
    {
        $post = \EntityManager::get()->getRepository(Post::class)->find($id);

        return new \Symfony\Component\HttpFoundation\JsonResponse($post->getTags());
    }

}