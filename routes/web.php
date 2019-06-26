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
Route::get('/', 'userController@inicio');

Route::get('/altas', 'userController@altas');

Route::get('/consultas', 'userController@consultas');

Route::post('/altas/guardar', 'userController@guarda');
