<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/productos', [App\Http\Controllers\ProductoController::class, 'index'])->name('productos');
Route::post('/subirProducto', [App\Http\Controllers\ProductoController::class, 'subirProducto'])->name('subirProducto');
Route::get('/producto/{ruta}', [App\Http\Controllers\ProductoController::class, 'mostrarProducto']);
Route::post('/eliminarProducto', [App\Http\Controllers\ProductoController::class, 'eliminarProducto'])->name('eliminarProducto');
Route::post('/subirComentario', [App\Http\Controllers\ProductoController::class, 'subirComentario'])->name('subirComentario');