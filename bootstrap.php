<?php
require __DIR__ . '/vendor/autoload.php';

use Dsprog\Framework\Response;
use Dsprog\Framework\Router;

$router = new Router;

require __DIR__ . '/config/containers.php';
require __DIR__ . '/config/middlewares.php';
require __DIR__ . '/config/events.php';
require __DIR__ . '/config/routes.php';

try{
    $result = $router->run();
    
    $response = new Response();
    $params = [
        'container' => $container,
        'params' => $result['params']
    ];

    foreach($middlewares['before'] as $middleware) {
        $middleware($container);
    }

    $response($result['action'], $params);

    foreach($middlewares['after'] as $middleware) {
        $middleware($container);
    }

} catch(\Dsprog\Framework\Exceptions\HttpException $e){
    echo json_encode(['error' => $e->getMessage()]);
}
