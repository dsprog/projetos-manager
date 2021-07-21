<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function show($container, $params)
    {
        $user = (new User($container))->get($params[1]);
        return 'Usuário <strong>'.$user['name'].'</strong> e o e-mail é '.$user['email'].'!';
    }
}