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

Auth::routes();

Route::get('/welcome', 'HomeController@index')->name('welcome');

Route::get('/About', 'HomeController@index1')->name('About');

Route::get('/dashboard', 'HomeController@index2')->name('dashboard');

Route::get('/demoindex', 'HomeController@index3')->name('demoindex');

Route::get('/demobook', 'HomeController@index4')->name('demobook');


