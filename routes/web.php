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

Route::get("/", ['uses' => 'HomeController@enter', 'as' => 'enter']);
// Route::post("/", ['uses' => 'AuthController@authEnter', 'as' => 'authEnter']);

Route::get("/invitation", ['uses' => 'AuthController@invitation', 'as' => 'invitation']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
