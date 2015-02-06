<?php

require dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$container = Container::make();

// Add user dependencies
$containerModifier = new \Definition\Dependencies();
$containerModifier->defineDependencies($container);

define('APP_ROOT_PATH', dirname(dirname(dirname(__FILE__))));