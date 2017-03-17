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

Route::get('/', 'TasksController@index');
Route::post('tasks', 'TasksController@store');
Route::patch('tasks/{task}', 'TasksController@update');
Route::delete('tasks/{task}', 'TasksController@destroy');
