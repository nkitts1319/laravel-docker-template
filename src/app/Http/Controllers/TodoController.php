<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //S7の時点では無駄な記述。S13で
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todo = new Todo();
        $todos = $todo->all();
        
        return view('todo.index', ['todos' => $todos]);
    }

    public function create()
    {
    // TODO: 第1引数を指定
        return view('todo.create'); // 追記
    }

    public function store(Request $request)
    {
        $inputs = $request->all(); // 変更
        dd($inputs); // 追記

        $todo = new Todo();
        $todo->fill($inputs); // 変更
        $todo->save();

        return redirect()->route('todo.index');
    }
}