<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

//RUTA DE INICIO
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('/categoria',[CategoriaController::class,'index_categoria'])->name('categoria.index');
    Route::get('/categoria/form',[CategoriaController::class,'index_formulario'])->name('categoria.formulario');
    Route::post('/categoria/store',[CategoriaController::class,'store_categoria']);
});



