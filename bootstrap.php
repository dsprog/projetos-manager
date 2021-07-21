<?php
require __DIR__ . '/vendor/autoload.php';

use Dsprog\Framework\Response;
use Dsprog\Framework\Router;

$router = new Router;

require __DIR__ . '/config/containers.php';
require __DIR__ . '/config/routes.php';

try{
    $result = $router->run();
    
    $response = new Response();
    $params = [
        'container' => $container,
        'params' => $result['params']
    ];

    $response($result['action'], $params);

} catch(\Dsprog\Framework\Exceptions\HttpException $e){
    echo json_encode(['error' => $e->getMessage()]);
}
