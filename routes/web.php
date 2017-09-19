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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','HomeController@index');
Route::get('/home','HomeController@home');
Route::get('/test','HomeController@test');
Route::get('/humans','HomeController@humans');
Route::get('/create','HomeController@create');

Route::post('/home','HomeController@report');
Route::post('/create','HomeController@createAction');

Route::get('/update/{id}','HomeController@update');
Route::post('/update','HomeController@updateAction');
Route::get('/delete/{id}','HomeController@delete');