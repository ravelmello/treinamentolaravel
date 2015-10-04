<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('welcome', function(){
    return view('welcome');
});

//Route::get('phpeste', 'UserController@cadastro');
Route::get('teste', 'UserController@teste');
Route::get('hello', 'UserController@hello');
Route::get('cadastro','UserController@cadastro');
Route::get('sobre','UserController@sobre');
Route::post('insert','UserController@insert');


