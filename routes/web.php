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

Auth::routes();


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'DashboardController@index')->name('home');

Route::get('verifyemail/{token}', 'Auth\RegisterController@verify');

Route::get('roles/{id}/permissions', 'RolesController@permissions');
Route::post('roles/role_permissions', 'RolesController@rolePermissions');
Route::post('roles/role_permissions_delete', 'RolesController@removePermissions');
Route::resource('roles', 'RolesController');

Route::resource('permissions', 'PermissionsController');
Route::resource('users', 'UsersController');

Route::resource('profile', 'ProfileController');
