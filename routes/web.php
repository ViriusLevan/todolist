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

Route::get('/', function () {
    return view('welcome');
});

Route::get('todo', function (){
	return view('todo');
});

Route::get('todo', 'TodoController@index');

Route::get('todo', 'TodoController@index');
Route::post('todo', 'TodoController@store');

Route::get('mail', function(){
	return view('mail');
});

Route::post('send_email', 'MailController@send');



//Route::post('todoErase', 'TodoController@erase');
//Route::get('todo/{id}/delete', ['uses' => 'TodoController@erase', 'as' => 'todo.erase']);
Route::delete('todo/{id}/delete', 'TodoController@destroy');
//Route::get('delete/{id}','TodoController@destroy');


