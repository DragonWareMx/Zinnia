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

// Route::get('/404', function () {
//     return view('404');
// });

// QUIENES SOMOS
Route::get('/quienes-somos', function () {
    return view('quienesSomos');
})->name('quienes-somos');

Route::get('/lay', function () {
    return view('layout.main');
});

// CONTACTO
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

//EVENTOS
Route::get('/eventos', 'eventos@index')->name('eventos');

//PRODUCCIONES

Route::get('/producciones', 'ProductionController@index')->name('producciones');
Route::get('/coproducciones', 'ProductionController@coproducciones')->name('coproducciones');
Route::get('/produccion/{id}', 'ProductionController@produccion')->name('produccion');

//PROYECTOS
Route::get('/proyectos', 'ProjectController@index')->name('proyectos');
Route::get('/proyecto/{id}', 'ProjectController@proyecto')->name('proyecto');