<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarioController;

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
    return view('principal');
});

Route::get('/inventario', [InventarioController::class, 'index'])->name('inventario.index');
Route::get('/inventario/agregar', [InventarioController::class, 'agregarProducto'])->name('inventario.agregar');
Route::get('/inventario/rebajar', [InventarioController::class, 'rebajarProducto'])->name('inventario.rebajar');
Route::get('/inventario/reporte', [InventarioController::class, 'reporteInventario'])->name('inventario.reporte');
