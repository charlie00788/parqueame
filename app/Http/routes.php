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

Route::get('inicio-de-sesion', [
    'uses'  => 'Auth\AuthController@getLogin',
    'as'    => 'login'
]);
Route::post('inicio-de-sesion', [
    'uses'  => 'Auth\AuthController@postLogin',
    'as'    => 'login'
]);
Route::get('salir-de-sesion', [
    'uses'  => 'Auth\AuthController@getLogout',
    'as'    => 'logout'
]);

//******** para la recuperacion de contrasenas

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

// registration routes
Route::get('registro', [
    'uses'  => 'Auth\AuthController@getRegister',
    'as'    => 'register'
]);
Route::POST('registro', [
    'uses'  => 'Auth\AuthController@POSTRegister',
    'as'    => 'register'
]);

// para la aplicacion **************************************************************

Route::get('disponibles', [
    'uses'  => 'ParkingController@getAvailable',
    'as'    => 'getAvailable'
]);

Route::get('actualizar/{id}', [
    'uses'  => 'ParkingController@getUpdate',
    'as'    => 'getUpdate'
]);


// para ususarios autenticados

Route::group(['middleware' => 'auth'], function(){

    Route::get('/', [
        'uses' => 'HomeController@index',
        'as'   => 'home'
    ]);

});