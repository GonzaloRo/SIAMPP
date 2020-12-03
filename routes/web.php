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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/reporteProC', 'ReportesController@index')->name('reporteProC');

/** Gestionar Publicidades */

Route::get('/publicidades', 'PublicidadesController@index')->name('publicidades.index');
Route::get('/add_publicidad', 'PublicidadesController@create')->name('publicidades.create');