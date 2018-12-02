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
Route::post("/", ['uses' => 'HomeController@rsvpSubmit', 'as' => 'rsvp.post']);
Route::get("/fin", ['uses' => 'HomeController@rsvpFin', 'as' => 'rsvp.fin']);
Route::post("/fin", ['uses' => 'HomeController@rsvpUpdate', 'as' => 'rsvp.update']);
// Route::post("/", ['uses' => 'AuthController@authEnter', 'as' => 'authEnter']);

Route::get("/cp", ['uses' => 'AdminController@cp', 'as' => 'admin.cp']);

Auth::routes();

Route::get("/logout", ['uses' => 'AuthController@logout', 'as' => 'logout']);

Route::get("/register", ['uses' => 'HomeController@delRegister', 'as' => 'del.register']);

