<?php

$middlewares = [
    'after' => [
        function ($c){
            echo 'after<br><br><br>';
        }
    ],
    'before' => [        
        function ($c){
            echo '<br><br><br>before';
        }
    ]
];