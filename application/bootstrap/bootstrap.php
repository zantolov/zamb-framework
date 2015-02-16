<?php

define('APP_ROOT_PATH', dirname(dirname(dirname(__FILE__))));
define('CACHE_PATH', APP_ROOT_PATH . DIRECTORY_SEPARATOR . 'cache');
define('VENDOR_DIR', 'vendor');

require APP_ROOT_PATH . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$container = Container::make();

// Add app specific dependencies
$containerModifier = new \Definition\Dependencies();
$containerModifier->defineDependencies($container);

