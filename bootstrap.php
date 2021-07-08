<?php
require __DIR__ . '/vendor/autoload.php';

use Dsprog\Framework\Router;

$router = new Router;
$router->add('GET', '/', function(){
    return 'HOME';
});
$router->add('GET', '/projects', function(){
    return 'Lista de projetos';
});
try{
    echo $router->run();
} catch(\Dsprog\Framework\Exceptions\HttpException $e){
    echo json_encode(['error' => $e->getMessage()]);
}
