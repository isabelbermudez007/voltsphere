<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\CuotaController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\FinanciamientoController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\ReclamoController;
use App\Http\Controllers\RepuestoController;
use App\Http\Controllers\SectorController;
use App\Http\Controllers\SeguroController;
use App\Http\Controllers\SistemasController;
use App\Http\Controllers\TestdriveController;
use App\Http\Controllers\VentaRepuestoController;
use App\Http\Controllers\VentasController;
use App\Models\Financiamiento;
use App\Models\Pago;
use App\Models\Reclamo;
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
Route::resource('autos', AutoController::class);
Route::resource('cuota', CuotaController::class);
Route::resource('empleado', EmpleadoController::class);
Route::resource('financiamiento',FinanciamientoController::class);
Route::resource('pago', PagoController::class);
Route::resource('reclamo', ReclamoController::class);
Route::resource('repuesto', RepuestoController::class);
Route::resource('sector', SectorController::class);
Route::resource('seguro', SeguroController::class);
Route::resource('service', SeguroController::class);
Route::resource('sistemas', SistemasController::class);
Route::resource('testdrive', TestdriveController::class);
Route::resource('ventarepuesto', VentaRepuestoController::class);
Route::resource('ventas', VentasController::class);
Route::get('/contacto', function () {
    return view('contacto.index');
})->name('contacto.index');

require __DIR__.'/auth.php';
Route::middleware(['auth', 'sistemas'])->group(function () {
    Route::get('/sistemas', function () {
        return view('sistemas.index');
    })->name('sistemas.index');
});

Route::middleware(['auth', 'ventas'])->group(function () {
    Route::get('/ventas', function () {
        return view('ventas.index');
    })->name('ventas.index');
});

Route::middleware(['auth', 'cliente'])->group(function () {
    Route::get('/clientes', function () {
        return view('clientes.index');
    })->name('clientes.index');
});
