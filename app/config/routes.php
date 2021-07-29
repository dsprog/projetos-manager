<?php

$router->add('GET', '/', function() use ($container) {
    return file_get_contents(__DIR__ . '/../../template/index.html');
});

$router->add('GET', '/contato', function(){
    return 'Contato';
});
/*
$router->add('GET', '/usuario/(\d+)', function($params) use ($container){
    $user = (new UserController())->show($params);
    var_dump($user); exit;
    return 'Contato';
});
*/
$router->add('GET', '/usuario/(\d+)', '\\App\\Controllers\\UserController::show');

$router->add('GET', '/projects/(\d+)', function ($params) {
    return 'estamos listando o projeto de id: ' . $params[1];
});