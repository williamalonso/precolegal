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
    //return view('welcome');
});

Route::get('/', function(){
    return view('index');
});

Route::get('/home', ['as'=>'home', 'uses'=>'PrecoController@index']);
Route::get('/inserirpreco', ['as'=>'inserir', 'uses'=>'PrecoController@form']);
Route::any('/check', ['as'=>'checkbox', 'uses'=>'PrecoController@teste']);
