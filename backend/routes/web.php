<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Ruta pública para la página de introducción
Route::get('/', function () {
    return view('intro');   // Debes crear resources/views/intro.blade.php
})->name('intro');

// Ruta del dashboard (protegida)
Route::get('/dashboard', function () {
    return view('romanico.home');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas de perfil (protegidas)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas de autenticación generadas por Breeze
require __DIR__.'/auth.php';

// Rutas para fallback (evita errores de páginas y te lleva al inicio)
Route::fallback(function () {
    return redirect()->route('intro'); // o redirect('/');
});

