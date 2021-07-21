<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function show($container, $params)
    {
        return (new User($container))->get($params[1]);
    }
}