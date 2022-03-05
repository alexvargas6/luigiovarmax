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
Route::get('/movie/{id?}', 'indexControl@singleShow')->name('movieSingle');
Route::get('/prueba', 'indexControl@prueba');

Route::group(['prefix' => 'administrar'], function () {
    Route::get('/upload', 'uploadControl@uploadShow')->name('uploadShow');
    Route::get('/upload/actor', 'uploadControl@actorShow')->name('actorShow');
    Route::post('/upload/store', 'uploadControl@storeMovie')->name('storeVideo');
    Route::post('/upload/actor', 'uploadControl@storeActor')->name('storeActor');
    Route::post('/upload/actor/pelicula/store', 'uploadControl@actorMovStore')->name('acu');
    Route::get('/upload/actor/pelicula', 'uploadControl@actMovShow')->name('vistaActMov');
    Route::get('/upload/director/pelicula', 'uploadControl@dirShow')->name('director');
    Route::post('/upload/director/pelicula/store', 'uploadControl@dirMoviStr')->name('storeDirMov');
    Route::post('/upload/director', 'uploadControl@storeDir')->name('storeDir');
    Route::get('/upload/director/pelicula/show', 'uploadControl@showDirMovie')->name('directorShow');
});

Route::group(['prefix' => 'us'], function () {
    Route::get('/user', 'userControl@controlUsShow')->name('showCUser');
});

Auth::routes();

Route::get('/home', function () {
    return redirect('/');
})->name('home');
