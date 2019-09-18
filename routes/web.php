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

Route::get('/', 'PagesController@home');

Route::get('/trabajaconnosotros', function () {
    return view('trabajaconnosotros');
});

Route::resource('users','UsersController');
//Route::get('/users', 'UsersController@index');
//Route::get('/users/{user}', 'UsersController@show');
//Route::get('users/{user}/edit', 'UsersController@edit');
//Route::post('/users','UsersController@store');
//Route::patch('/users/{user}','UsersController@update');
//Route::delete('/users/{user}','UsersController@destroy');