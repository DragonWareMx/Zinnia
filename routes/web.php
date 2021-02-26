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

Route::get('/inicio', function () {
    return view('inicio');
});

// QUIENES SOMOS
Route::get('/quienes-somos', function () {
    return view('quienesSomos');
});

Route::get('/lay', function () {
    return view('layout.main');
});

//PRODUCCIONES

Route::get('/producciones', 'ProductionController@index')->name('producciones');
