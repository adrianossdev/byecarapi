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

Route::get('/', 'App\Http\Controllers\AuthController@index');
Route::get('/login', 'App\Http\Controllers\AuthController@login')->name('login');
//Route::get('/consulta/{token}', 'App\Http\Controllers\ClienteController@index')->name('consulta');
Route::get('/consulta/{token}', 'App\Http\Controllers\ConsultaController@index')->name('consulta');
