<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\OfertaController;

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
Route::get('/', HomeController::class)->name('flycar.inicio');
// Laravel 7:
// Route::get('/', 'HomeController');
// Route::get('/catalogo', 'CatalogoController@index');
Route::controller(CatalogoController::class)->group(function () {
    Route::get('/catalogo', 'index')->name('catalogo.index'); //Si se pone class busca el metodo __invoke
    Route::get('/catalogo/crearProducto', 'create')->name('catalogo.create');
    Route::get('/catalogo/{marca}/{vehiculo?}', 'show')->name('catalogo.show');
});

// Todas estas líneas se simplifican con Route::resource si se siguen las convenciones que indica laravel
// Route::controller(OfertaController::class)->group(function () {
//     Route::get('/ofertas', 'index')->name('ofertas.index');
//     Route::get('/ofertas/crearOferta', 'create')->name('ofertas.create');
//     Route::post('/ofertas', 'store')->name('ofertas.store');
//     Route::get('/ofertas/{oferta}', 'show')->name('ofertas.show');
//     Route::get('/ofertas/{oferta}/editarOferta', 'edit')->name('ofertas.edit');
//     Route::put('/ofertas/{oferta}', 'update')->name('ofertas.update');
//     Route::delete('/ofertas/{oferta}', 'destroy')->name('ofertas.destroy');
// });
Route::resource('ofertas', OfertaController::class);
// Si se desea modificar la url se tiene que indicar el nombre de los parametros y los nombres para no tener que modificar el código de las vistas y controlador
// Route::resource('descuentos', OfertaController::class)->parameters(['descuentos' => 'oferta'])->names('ofertas');