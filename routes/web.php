<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('listagem-usuarios', 'UserController@listUser');

Route::group(['namespace' => 'Form'], function () {
    Route::get('usuarios', 'TestController@listAllUsers')->name('users.listAll');
    Route::get('usuarios/novo', 'TestController@formAddUser')->name('users.formAddUser');
    Route::get('usuarios/editar/{user}', 'TestController@formEditUser')->name('users.formEditUser');
    Route::get('usuarios/{user}', 'TestController@listUsers')->name('users.list');

    Route::post('usuarios/store', 'TestController@storeUser')->name('users.store');

    Route::put('usuarios/edit/{user}', 'TestController@edit')->name('users.edit');

    Route::delete('usuario/destroy/{user}', 'TestController@destroy')->name('users.destroy');
});
