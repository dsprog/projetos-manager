<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function show($container, $request)
    {
        $id = $request->attributes->get(1);
        $user = (new User($container))->get($id);
        // return $user;
        return 'Usuário <strong>'.$user['name'].'</strong> e o e-mail é '.$user['email'].'!';
    }
}