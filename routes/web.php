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
Route::get('/prueba/{parametroBusqueda?}', 'busqControl@prueba');
Route::get('/desarrolladores', 'indexControl@devShow')->name('dev');

Route::group(['prefix' => 'busqueda'], function () {
    Route::get('/buscar/{parametroBusqueda?}', 'busqControl@listaShow')->name('listaShow');
    Route::post('/buscar/accion', 'busqControl@buscar')->name('accionBusq');
    Route::get('/lomas/accion', 'busqControl@moreRecent')->name('morRe');
});

Route::group(['prefix' => 'administrar'], function () {
    Route::get('/upload', 'uploadControl@uploadShow')->name('uploadShow');
    Route::get('/upload/categoria', 'uploadControl@categoriaShow')->name('catShow');
    Route::get('/upload/actor', 'uploadControl@actorShow')->name('actorShow');
    Route::post('/upload/store', 'uploadControl@storeMovie')->name('storeVideo');
    Route::post('/upload/actor', 'uploadControl@storeActor')->name('storeActor');
    Route::post('/upload/actor/pelicula/store', 'uploadControl@actorMovStore')->name('acu');
    Route::get('/upload/actor/pelicula', 'uploadControl@actMovShow')->name('vistaActMov');
    Route::get('/upload/director/pelicula', 'uploadControl@dirShow')->name('director');
    Route::post('/upload/director/pelicula/store', 'uploadControl@dirMoviStr')->name('storeDirMov');
    Route::post('/upload/director', 'uploadControl@storeDir')->name('storeDir');
    Route::post('/upload/categoria/store', 'uploadControl@categoriaStore')->name('storeCat');
    Route::post('/upload/categoria/movie/store', 'uploadControl@catMovStore')->name('storeCatMov');
    Route::get('/upload/director/pelicula/show', 'uploadControl@showDirMovie')->name('directorShow');
    Route::get('/media/show', 'uploadControl@showMedia')->name('mediaShow');
    Route::post('/media/foto/store', 'uploadControl@mediaStore')->name('storePicture');
    Route::post('/media/video/store', 'uploadControl@videoStore')->name('storeVid'); 
});

Route::group(['prefix' => 'us'], function () {
    Route::get('/like/{idUs?}/{idMov?}', 'likeControl@likear')->name('like');
    Route::get('/user', 'userControl@controlUsShow')->name('showCUser');
    Route::post('/bloquear', 'userControl@bloqUs')->name('bloquear');
    Route::post('/nivel', 'userControl@cambiarLvl')->name('cambiarNivel');
    Route::post('/nivel/store', 'userControl@nivelStore')->name('addLvl');
    Route::get('/perfil/{id?}', 'perfilControl@perfilShow')->name('perfil');
    Route::get('/favorites', 'perfilControl@favoritProfile')->name('perfilFav');
    Route::get('/single/{id?}', 'perfilControl@singleProfile')->name('single');
    Route::post('/update/usuario', 'perfilControl@updateProfile')->name('upUs');
    Route::post('/update/foto', 'perfilControl@fotoChange')->name('upFoto');
    Route::post('/calificacion/usuario', 'likeControl@puntuarStore')->name('calificar');
});

Auth::routes();

Route::get('/home', function () {
    return redirect('/');
})->name('home');
