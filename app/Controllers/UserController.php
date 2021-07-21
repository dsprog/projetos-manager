<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function show(int $id)
    {
        return (new User($this->container))->get($id);
    }
}