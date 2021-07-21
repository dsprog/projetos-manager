<?php

namespace Dsprog\Framework;

class Response
{
    public function __invoke($action, $params)
    {
        if (is_string($action)) {
            $action = explode('::', $action);
            $classController = '\\App\\Controllers\\' . $action[0];
            $action[0] = new $classController;
        }
        
        //echo '<pre><code>';
        echo call_user_func_array($action, $params);
        //echo '</code></pre>';
    }
}