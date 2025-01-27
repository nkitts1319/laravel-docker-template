<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Laravel動作確認
Route::get('/', function () {
    return view('welcome');
});

// 編集
Route::get('/todo', 'TodoController@index')->name('todo.index'); // ルート名の定義を追記
Route::get('/todo/create', 'TodoController@create')->name('todo.create'); // 追記; // S11 追記

// S13
Route::post('/todo', 'TodoController@store')->name('todo.store');