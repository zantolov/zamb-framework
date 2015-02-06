<?php

use Symfony\Component\HttpFoundation\Response;

class TestController
{

    public function indexAction($name)
    {
        return new Response('Hello ' . $name);
    }

    public function createAction()
    {
        $post = new Post();
        $post->title = time();
        $post->slug = 'post-' . $post->title;
        $post->body = 'Lorem Ipsum Dolor Sit';

        EntityManager::persist($post);
        EntityManager::flush();

        return new Response('OK!');
    }

    public function listAction()
    {
        $posts = EntityManager::get()->getRepository('Post')->findAll();

        $data = array();
        foreach ($posts as $post) {
            $data[] = array($post->id, $post->title, $post->slug, $post->body);
        }

        return new \Symfony\Component\HttpFoundation\JsonResponse($data);

    }
}