<?php

use Symfony\Component\HttpFoundation\Response;

class TestController
{

    public function indexAction($name, $last)
    {
        return new Response('Hello ' . $name . $last);
    }
}