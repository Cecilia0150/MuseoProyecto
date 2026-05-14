<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VisitorController;

// Redirigir la raíz al login
Route::get('/', function () {
    return redirect()->route('login');
});

// Ruta para mostrar el formulario de registro (GET)
Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware(['guest'])
    ->name('register');

// Ruta para procesar el registro (POST)
Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware(['guest']);

// Rutas protegidas
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
}); // <-- Asegúrate de que esta línea tenga el }); al final

// Ruta exclusiva para visitantes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [VisitorController::class, 'index'])->name('dashboard');
});