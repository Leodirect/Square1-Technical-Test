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

Route::get('/', function () {return view('welcome');});
Route::get('/register', function () {return view('register');});
Route::get('/login', function () {return view('login');});
Route::get('/success', function () {return view('sucessregister');});
Route::get('/birthday', function () {return view('birthday');});


Route::get('/main', 'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('/main/successlogin', 'MainController@successlogin');
Route::get('/main/logout', 'MainController@logout');
Route::post('/create', 'CreateController@create');
Route::post('/update', 'BirthdayController@update');