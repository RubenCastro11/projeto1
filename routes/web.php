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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/atores','App\Http\Controllers\AtoresController@index')
    ->name('atores.index');

Route::get('/atores/{id}/show','App\Http\Controllers\AtoresController@show')
    ->name('atores.show');

Route::get('/filmes','App\Http\Controllers\FilmesController@index')
    ->name('filmes.index');

Route::get('/filmes/{id}/show','App\Http\Controllers\FilmesController@show')
    ->name('filmes.show');

Route::get('/generos','App\Http\Controllers\GenerosController@index')
    ->name('generos.index');

Route::get('/generos/{id}/show','App\Http\Controllers\GenerosController@show')
    ->name('generos.show');







