<?php

$container['db'] = function() {
    $dns = 'mysql:host=localhost;dbname=pp_project_manager';
    $username = 'root';
    $password = '';
    $options = [
        \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    ];

    $pdo = new \PDO($dns, $username, $password, $options);
    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

    return $pdo;
};

$container['events'] = function() {
    return new Laminas\EventManager\EventManager;
};

$container['users_model'] = function($c) {
    return new \App\Models\Users($c);
};
