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

Route::get('/home',function() {
	$name = "pin";
	$pp = "Coe";
	//return view('index' compact('name'));
	return view('index')->with('name',$name)->with('pp',$pp);
});

Route::get('/test',function() {
	$name = "jiratchaya";
	return view('test')->with('name',$name);
});
