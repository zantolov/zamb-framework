<?php

/**
 * Front controller of application
 */

use \Zantolov\Zamb\Core\Application\Application;
use \Zantolov\Zamb\Core\Application\Container;

require_once('../application/bootstrap/bootstrap.php');

/** @var Application $app */
$app = Container::get('application');
$response = $app->handle(Container::get('request'));

$response->send();

