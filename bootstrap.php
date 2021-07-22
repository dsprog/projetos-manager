<?php
require __DIR__ . '/vendor/autoload.php';

use Dsprog\Framework\App;
use Dsprog\Framework\Router;

$router = new Router;

require __DIR__ . '/config/containers.php';
require __DIR__ . '/config/events.php';
require __DIR__ . '/config/routes.php';

$app = new App($router, $container);
require __DIR__ . '/config/middlewares.php';
$app->run();