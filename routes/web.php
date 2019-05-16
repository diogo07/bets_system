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
use App\Partida;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/campeonato/{codigo}', function ($codigo) {
    $partida = Partida::findByCodigo($codigo);
    $lista = json_encode([$partida]);
    return compact('lista');
});

Route::get('/odds/{codigo}', function ($codigo) {
    $partida = Partida::findByCotacoesTempoNormal($codigo);
    $odds = json_encode([$partida]);
    return compact('odds');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/partidas', 'PartidaController@index')->name('partidas');
Route::get('/partidas/{codigo}', 'PartidaController@show')->name('partidas');
Route::get('/inicio', 'InicioController@index')->name('inicio');