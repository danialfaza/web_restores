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

Route::get('/restoran', 'RestoranController@index');
Route::post('/restoran/create','RestoranController@create');
Route::get('/restoran/{id}/edit', 'RestoranController@edit');
Route::post('/restoran/{id}/update', 'RestoranController@update');
Route::get('/restoran/{id}/delete', 'RestoranController@delete');