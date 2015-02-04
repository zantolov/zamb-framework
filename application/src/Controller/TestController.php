<?php

use Symfony\Component\HttpFoundation\Response;

class TestController
{

    public function indexAction($name)
    {
        return new Response('Hello ' . $name);
    }
}