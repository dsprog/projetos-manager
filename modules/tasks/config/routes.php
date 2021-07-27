<?php

$router->add('GET', '/tasks', '\Dsprog\Framework\Tasks\Controllers\TasksController::index');
$router->add('GET', '/tasks/show', '\Dsprog\Framework\Tasks\Controllers\TasksController::show');