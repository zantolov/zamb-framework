<?php

namespace Controller;

use Faker\Factory;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use View;
use Zantolov\Zamb\Example\Blog\Model\Post;
use EntityManager;

class SiteController
{

    public function indexAction(Request $r)
    {
        return View::response('Site/home-page.html.twig');
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

    public function siteHeader(Request $request)
    {
        return '<h1>Header</h1>';
    }

    public function dumpRequest(Request $request)
    {
        return print_r($request, true);
    }
}