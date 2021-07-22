<?php

namespace Dsprog\Framework;

use Dsprog\Framework\Response;
use Dsprog\Framework\Exceptions\HttpException;

class App
{
    private $router, $container;
    private $middlewares = [
        'before'=>[],
        'after'=>[]
    ];

    public function __construct($router, $container)
    {
        $this->router = $router;
        $this->container = $container;
    }

    public function addMiddleware($on, $callback)
    {
        $this->middleware[$on][] = $callback;
    }

    public function run()
    {
        try{
            $result = $this->router->run();
            
            $response = new Response();
            $params = [
                'container' => $this->container,
                'params' => $result['params']
            ];
        
            foreach($this->middlewares['before'] as $middleware) {
                $middleware($this->container);
            }
        
            $response($result['action'], $params);
        
            foreach($this->middlewares['after'] as $middleware) {
                $middleware($this->container);
            }
        
        } catch(HttpException $e){
            echo json_encode(['error' => $e->getMessage()]);
        }        
    }
}