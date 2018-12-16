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

Route::get('/home', 'WebPagesController@getHome');
Route::get('/map', 'WebPagesController@getMap');
Route::get('/info', 'WebPagesController@getInfo');
Route::get('/profile', 'WebPagesController@getProfile');
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
