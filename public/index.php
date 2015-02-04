<?php

/**
 * Front controller of application
 */

use Symfony\Component\HttpFoundation\Request;
use \Zantolov\Zamb\Core\Application\Application;
use \Zantolov\Zamb\Core\Application\Container;

require_once('../application/bootstrap/web.php');


$request = Request::createFromGlobals();

$container = Container::make();

// Add user dependencies
$containerModifier = new \Definitions\Dependencies();
$containerModifier->defineDependencies($container);

/** @var Application $app */
$app = $container['application'];
$response = $app->handle($request);

$response->send();

