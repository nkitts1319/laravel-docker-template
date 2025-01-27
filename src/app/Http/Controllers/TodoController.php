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
    $content = $request->input('content');

    // 1. todosテーブルの1レコードを表すTodoクラスをインスタンス化
    $todo = new Todo(); 
    // 2. Todoインスタンスのカラム名のプロパティに保存したい値を代入
    $todo->content = $content;
    // 3. Todoインスタンスの`->save()`を実行してオブジェクトの状態をDBに保存するINSERT文を実行
    $todo->save();

    return redirect()->route('todo.index'); // 追記
    }
}