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

Route::get('parqueo_privado/{id}', [
    'uses'  => 'ParkingController@getParqueo',
    'as'    => 'getParqueo'
]);

Route::get('actualizar_privado/{id}/{opcion}', [
    'uses'  => 'ParkingController@getUpdatePrivate',
    'as'    => 'getUpdatePrivate'
]);

Route::get('gamlp', [
    'uses'  => 'ParkingController@getgmlp',
    'as'    => 'getgmlp'
]);


// para ususarios autenticados

Route::group(['middleware' => 'auth'], function(){

    Route::get('/', [
        'uses' => 'HomeController@index',
        'as'   => 'home'
    ]);

    // para el admin

    Route::get('reporte', [
        'uses'  => 'AdminController@getReport',
        'as'    => 'admin.getR
        eport'
    ]);

    Route::get('usuarios', [
        'uses'  => 'AdminController@getUsers',
        'as'    => 'admin.getUsers'
    ]);

    Route::get('agregar-usuario', [
        'uses'  => 'AdminController@getAddUser',
        'as'    => 'admin.getAddUser'
    ]);

    Route::post('agregar-usuario', [
        'uses'  => 'AdminController@postAddUser',
        'as'    => 'admin.postAddUser'
    ]);

    Route::get('borrar-usuario/{user_id}', [
        'uses'  => 'AdminController@getDeleteUser',
        'as'    => 'admin.getDeleteUser'
    ]);

    // para los propietarios

    Route::get('propietarios', [
        'uses'  => 'OwnerController@getOwners',
        'as'    => 'owner.getOwners'
    ]);

    Route::get('agregar-propietario', [
        'uses'  => 'OwnerController@getAddOwner',
        'as'    => 'owner.getAddOwner'
    ]);

    Route::post('agregar-propietario', [
        'uses'  => 'OwnerController@postAddOwner',
        'as'    => 'owner.postAddOwner'
    ]);

    Route::get('borrar-propietario/{owner_id}', [
        'uses'  => 'OwnerController@getDeleteOwner',
        'as'    => 'owner.getDeleteOwner'
    ]);

    Route::get('parqueos/{owner_id}', [
        'uses'  => 'OwnerController@getParkings',
        'as'    => 'owner.getParkings'
    ]);

    Route::get('agregar-parqueo/{owner_id}', [
        'uses'  => 'OwnerController@getAddParking',
        'as'    => 'owner.getAddParking'
    ]);

    Route::post('agregar-parqueo', [
        'uses'  => 'OwnerController@postAddParking',
        'as'    => 'owner.postAddParking'
    ]);

    Route::get('borrar-parqueo/{parking_id}/{owner_id}', [
        'uses'  => 'OwnerController@getDeleteParking',
        'as'    => 'owner.getDeleteParking'
    ]);

    Route::get('cambiar-estado/{parking_id}', [
        'uses'  => 'OwnerController@getChangeState',
        'as'    => 'owner.getChangeState'
    ]);
});


Route::get('user/{username}/pass/{password}', [
    'uses'  => 'HomeController@getPrueba',
    'as'    => 'prueba.prueba'
]);