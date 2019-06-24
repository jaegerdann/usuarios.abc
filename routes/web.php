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
});

Route::get('/altas', function () {
  return view('welcome');
});

Route::get('/bajas', function () {
  return view('welcome');
});

Route::get('/consultas', function () {
  return view('welcome');
});
