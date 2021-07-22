<?php

$app->addMiddleware('after', function ($c){
    echo 'after<br><br><br>';
});

$app->addMiddleware('before', function ($c){
    echo 'before<br><br><br>';
});