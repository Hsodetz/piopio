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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// creamos una ruta para llevarnos a la vista de crear usuario.
//Route::get('/users/create', 'UserController@create')->name('users.create');

//Rutas para los usuarios
Route::get('users', 'Admin\UserController@index')->name('users.index')
        ->middleware('permission:users.index');
//Ruta para ver los detalles de un rol
Route::get('users/{user}', 'Admin\UserController@show')->name('users.show')
        ->middleware('permission:users.show');
//Ruta para actualizar un usuario por su id
Route::put('users/{user}', 'Admin\UserController@update')->name('users.update')
        ->middleware('permission:users.edit');
//Ruta para editar un usuario
Route::get('users/{user}/edit', 'Admin\UserController@edit')->name('users.edit')
        ->middleware('permission:users.edit');
Route::delete('users/{user}', 'Admin\UserController@destroy')->name('users.destroy')
        ->middleware('permission:users.destroy');


//Rutas para los roles
// Ruta para listar todos los roles
Route::get('roles', 'Admin\RoleController@index')->name('roles.index')
        ->middleware('permission:roles.index');

//Ruta para ver los detalles de un rol
Route::get('roles/{role}', 'Admin\RoleController@show')->name('roles.show')
        ->middleware('permission:roles.show');
//Ruta para almacenar los datos luego de ser introducidos en el formulario
Route::post('roles/store', 'Admin\RoleController@store')->name('roles.store')
        ->middleware('permission:roles.create');
//Ruta para mostrar el formulario de creacion de registro de roles
Route::get('role', 'Admin\RoleController@create')->name('roles.create')
        ->middleware('permission:roles.create');
//Ruta para actualizar un rol por su id
Route::put('roles/{role}', 'Admin\RoleController@update')->name('roles.update')
        ->middleware('permission:roles.edit');
//Ruta para editar un rol
Route::get('roles/{role}/edit', 'Admin\RoleController@edit')->name('roles.edit')
        ->middleware('permission:roles.edit');
Route::delete('roles/{role}', 'Admin\RoleController@destroy')->name('roles.destroy')
        ->middleware('permission:roles.destroy');

//Rutas para los permisos
// Ruta para listar todos los permisos
Route::get('permissions', 'Admin\PermissionController@index')->name('permissions.index')
        ->middleware('permission:permissions.index');

//Ruta para ver los detalles de un rol
Route::get('permissions/{permission}', 'Admin\PermissionController@show')->name('permissions.show')
        ->middleware('permission:permissions.show');
//Ruta para almacenar los datos luego de ser introducidos en el formulario
Route::post('permissions/store', 'Admin\PermissionController@store')->name('permissions.store')
        ->middleware('permission:roles.create');
//Ruta para mostrar el formulario de creacion de registro de roles
Route::get('permission', 'Admin\PermissionController@create')->name('permissions.create')
        ->middleware('permission:permissions.create');
//Ruta para actualizar un rol por su id
Route::put('permissions/{permission}', 'Admin\PermissionController@update')->name('permissions.update')
        ->middleware('permission:permissions.edit');
//Ruta para editar un rol
Route::get('permissions/{permission}/edit', 'Admin\PermissionController@edit')->name('permissions.edit')
        ->middleware('permission:permissions.edit');
Route::delete('permissions/{permission}', 'Admin\PermissionController@destroy')->name('permissions.destroy')
        ->middleware('permission:permissions.destroy');

