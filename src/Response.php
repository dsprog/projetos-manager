<?php

namespace Dsprog\Framework;
use Symfony\Component\HttpFoundation\Request;


class Response
{
    public function __invoke($action, $params)
    {
        parse_str(file_get_contents('php://input'), $_POST);

        $request = new Request(
            $_GET,
            $_POST,
            $params['params'],
            $_COOKIE,
            $_FILES,
            $_SERVER 
        );

        $params['params'] = $request;

        if (is_string($action)) {
            $action = explode('::', $action);
            $classController = '\\App\\Controllers\\' . $action[0];
            $action[0] = new $classController;
        }
        
        $response = call_user_func_array($action, $params);
        
        if(is_array($response)) {
            $response = json_encode($response);
        }
        
        echo $response;
    }
}