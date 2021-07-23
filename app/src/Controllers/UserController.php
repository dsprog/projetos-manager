<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function show($container, $request)
    {
        $id = $request->attributes->get(1);
        $user = new User($container);

        return $user->create(['name'=>'Jose', 'email'=>'jose@test.com']);exit;



        //$r = $user->get($id);


        // return $user;
        //return 'Usuário <strong>'.$r['name'].'</strong> e o e-mail é '.$r['email'].'!';
    }
}