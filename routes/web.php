<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('listagem-usuarios', 'UserController@listUser');

Route::get('usuarios', 'Form\\TestController@listAllUsers')->name('users.listAll');
