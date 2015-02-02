<?php

/**
 * Front controller of application
 */

use Zantolov\Zamb\Application;
use Zantolov\Zamb\ContainerBuilder;
use Symfony\Component\HttpFoundation\Request;

require_once('../application/bootstrap/web.php');

// Fill container with defaults
$container = new \Pimple\Container();
$containerBuilder = new ContainerBuilder();
$containerBuilder->addDependancies($container);

$request = Request::createFromGlobals();

/** @var Application $app */
$app = $container['application'];
$response = $app->handle($request);

$response->send();

