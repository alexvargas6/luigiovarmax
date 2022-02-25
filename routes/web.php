<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'indexControl@indexShow')->name('menu');
Route::get('/movie', 'indexControl@singleShow')->name('movieSingle');
Route::get('/prueba', 'indexControl@prueba');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
