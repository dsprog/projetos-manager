<?php

namespace App\Controllers;

use App\Models\User;
use Dsprog\Framework\CrudController;

class UserController extends CrudController
{
    protected function getModel(): string
    {
        return 'users_model';
    }
}