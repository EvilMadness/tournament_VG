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
    return view('index');
});
Route::resource('carrera','CarreraController');
Route::resource('concursante','ConcursanteController');
Route::resource('escuela','EscuelaController');
Route::resource('personaje','PersonajeController');
