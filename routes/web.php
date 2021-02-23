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

Route::view('/','welcome')->name('rutaBienvenida');
Route::get('/glosario','glosarioController@index')->name('rutaGlosario');
Route::get('/ayuda','ayudaController@index')->name('temas.index');
/* Route::get('/ayuda/{id}','ayudaController@show')->name('ayuda.show'); */
Route::get('/glosario/{id}','glosarioController@show')->name('glosario.show');
