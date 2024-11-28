<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\VentasController;
use App\Models\Ventas;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//Route::middleware('role:vendedor')->group(function () {
    Route::resource('autos', AutoController::class);
//});
Route::resource('ventas', VentasController::class);
Route::get('/contacto', function () {
    return view('contacto.index');
})->name('contacto.index');
require __DIR__.'/auth.php';
Route::view('/sistemas','sistemas.index')
->middleware(['auth', 'verified', 'sistemas'])
->name('sistemas.index');
Route::view('/ventas','ventas.index')
->middleware(['auth', 'verified', 'ventas'])
->name('ventas.index');
Route::view('/clientes','clientes.index')
->middleware(['auth', 'verified', 'cliente'])
->name('clientes.index');