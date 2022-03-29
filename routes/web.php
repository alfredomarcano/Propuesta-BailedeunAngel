<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\webController;


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


// -------------------- Rutas de la Landing Page ------------------------ //
Route::get('/', [webController::class, 'inicio'])->name('Index');
Route::get('Producto', [webController::class, 'producto'])->name('Producto');
Route::get('Nosotros', [webController::class, 'nosotros'])->name('Nosotros');
Route::get('Unirte', [webController::class, 'unirte'])->name('Unirte');
Route::get('Contacto', [webController::class, 'contacto'])->name('Contacto');
Route::get('TuCarrito', [webController::class, 'carrito'])->name('Carrito');
Route::get('Pagar', [webController::class, 'pagar'])->name('Pagar');


// ------------------ Rutas del Panel Administrador --------------------- //


// ---------------- Rutas del Panel Web administrable ------------------ //