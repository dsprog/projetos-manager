<?php

use App\Models\User;

$router->add('GET', '/', function() use ($container) {
    var_dump($container['db']);
    return 'HOME';
});

$router->add('GET', '/contato', function(){
    return 'Contato';
});

$router->add('GET', '/usuario/(\d+)', function($params) use ($container){
    $user = (new User($container))->get($params[1]);
    var_dump($user); exit;
    return 'Contato';
});

$router->add('GET', '/projects/(\d+)', function ($params) {
    return 'estamos listando o projeto de id: ' . $params[1];
});