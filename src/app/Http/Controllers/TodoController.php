<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //S7の時点では無駄な記述
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todo = new Todo();
        $todos = $todo->all();
        
        return view('todo.index', ['todos' => $todos]);
    }
}
