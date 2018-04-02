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

Route::group(['middleware' => ['web']], function() {

    Route::get('/', function () {

        return view('welcome');
    });

    Auth::routes();

    Route::group(['middleware'=> ['auth']], function() {

        Route::get('/home', 'HomeController@index')->name('home');

        Route::get('/users', 'UserController@index')->name('users.index');
        Route::get('/users/{user}/show', 'UserController@show')->name('users.show');
        Route::get('/users/{user}/edit', 'UserController@edit')->name('users.edit');
        Route::put('/users/{user}', 'UserController@update')->name('users.update');

        Route::group(['middleware' => ['role:admin']], function() {

            // Usuarios
            Route::get('/users/create', 'UserController@create')->name('users.create');
            Route::post('/users/', 'UserController@store')->name('users.store');
            Route::get('/users/{user}/delete', 'UserController@delete')->name('users.delete');
            Route::delete('/users/{user}', 'UserController@destroy')->name('users.destroy');

            // Roles
            Route::get('/roles', 'RoleController@index')->name('roles.index');
        });

    });

});