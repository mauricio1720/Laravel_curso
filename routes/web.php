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
Route::get('/glosario','glosarioController@index')->name('rutaGlosario.index');

Route::post('/servicios','rutaserviciosController@store')->name('rutaservicios.store');
Route::get('/servicios','rutaserviciosController@index')->name('rutaservicios.index');
Route::get('/servicios/create','rutaserviciosController@create')->name('rutaservicios.create');
Route::get('/servicios/{id}','rutaserviciosController@show')->name('rutaservicios.show');

Route::get('/productos','rutaproductosController@index')->name('rutaproductos.index');

