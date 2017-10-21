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
    return view('index');
})->name('index');

Route::get('/users', function () {
    return view('users');
})->name('users');

Route::resource('usersRoute', 'UsersController');

Route::get('users/{id}/destroy', [
    'uses'  =>  'UsersController@destroy',
    'as'    =>  'users.destroy'
]);

Route::post('users/login', [
    'uses'  =>  'UsersController@login',
    'as'    =>  'users.login'
]);

Route::get('/getusers', 'UsersController@getUsers')->name('datatable.users'); // URL to Ajax