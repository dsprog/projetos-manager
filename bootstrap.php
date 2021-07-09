<?php
require __DIR__ . '/vendor/autoload.php';

use Dsprog\Framework\Router;

$router = new Router;
$router->add('GET', '/', function(){
    return 'HOME';
});

$router->add('GET', '/contato', function(){
    return 'Contato';
});

$router->add('GET', '/projects/(\d+)', function ($params) {
    return 'estamos listando o projeto de id: ' . $params[1];
});

try{
    echo $router->run();
} catch(\Dsprog\Framework\Exceptions\HttpException $e){
    echo json_encode(['error' => $e->getMessage()]);
}
