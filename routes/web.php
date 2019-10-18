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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Evaluadores', 'EvaluadoresController@index')->name('Evaluadores');
Route::get('/Grupos', 'GruposController@index')->name('Grupos');
Route::get('/Proyectos', 'ProyectosController@index')->name('Proyectos');
Route::get('/Salones', 'SalonesController@index')->name('Salones');
