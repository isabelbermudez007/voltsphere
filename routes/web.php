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
Route::get('/contact', function () {
    return view('contact.index');
});
require __DIR__.'/auth.php';
