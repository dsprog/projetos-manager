<?php

namespace Dsprog\Framework\Tasks\Controllers;

use App\Controllers\Controller;

class TasksController extends Controller
{
    public function index(){
        return 'primeiro modulo';
    }

    public function show(){
        return 'Exibir a tarefa';
    }
}