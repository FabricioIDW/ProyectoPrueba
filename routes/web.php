<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogoController;


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
// Este archivo es leido de manera secuencial entonces busca hasta que coincida la url ingresada
// Si la ruta crearProducto la ponemos abajo de {vehiculo} no funciona bien 
Route::get('/', HomeController::class);
// Laravel 7:
// Route::get('/', 'HomeController');
// Route::get('/catalogo', 'CatalogoController@index');
Route::controller(CatalogoController::class)->group(function() {
    Route::get('/catalogo', 'index'); //Si se pone class busca el metodo __invoke
    Route::get('/catalogo/crearProducto', 'create');
    Route::get('/catalogo/{marca}/{vehiculo?}', 'show');

});