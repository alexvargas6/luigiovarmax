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

Route::group(['prefix' => 'administrar'], function () {
    Route::get('/upload', 'uploadControl@uploadShow')->name('uploadShow');
    Route::post('/upload/store', 'uploadControl@storeMovie')->name('storeVideo');
});

Auth::routes();

Route::get('/home', function () {
    return redirect('/');
})->name('home');
