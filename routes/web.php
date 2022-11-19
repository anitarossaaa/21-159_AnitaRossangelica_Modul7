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

Route::get('/', '\App\Http\Controllers\MahasiswiController@index');
Route::get('/mahasiswis/create', '\App\Http\Controllers\MahasiswiController@create');
Route::post('/mahasiswis', '\App\Http\Controllers\MahasiswiController@store');
Route::get('/mahasiswis/{id}/edit', '\App\Http\Controllers\MahasiswiController@edit');
Route::patch('/mahasiswis/{id}', '\App\Http\Controllers\MahasiswiController@update');
Route::delete('/mahasiswis/{id}', '\App\Http\Controllers\MahasiswiController@destroy');
Route::get('/about', '\App\Http\Controllers\MahasiswiController@about');