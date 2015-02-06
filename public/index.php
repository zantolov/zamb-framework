<?php

/**
 * Front controller of application
 */

use Symfony\Component\HttpFoundation\Request;
use \Zantolov\Zamb\Core\Application\Application;
use \Zantolov\Zamb\Core\Application\Container;

require_once('../application/bootstrap/bootstrap.php');

$request = Request::createFromGlobals();

/** @var Application $app */
$app = Container::get('application');
$response = $app->handle($request);

$response->send();

