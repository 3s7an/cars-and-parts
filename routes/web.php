<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\PartController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/* Cars routes */ 
Route::get('cars', [CarController::class, 'index'])->middleware(['auth', 'verified'])->name('cars');
Route::get('cars/create', [CarController::class, 'create'])->middleware(['auth', 'verified'])->name('cars.create');
Route::post('cars', [CarController::class, 'store'])->middleware(['auth', 'verified'])->name('cars.store');
Route::get('cars/{car}', [CarController::class, 'show'])->middleware(['auth', 'verified'])->name('cars.view');
Route::get('cars/{car}/edit', [CarController::class, 'edit'])->middleware(['auth', 'verified'])->name('cars.edit');
Route::put('cars/{car}', [CarController::class, 'update'])->middleware(['auth', 'verified'])->name('cars.update');
Route::delete('cars/{car}', [CarController::class, 'destroy'])->middleware(['auth', 'verified'])->name('cars.delete');

/* Parts routes */
Route::get('parts', [PartController::class, 'index'])->middleware(['auth', 'verified'])->name('parts');
Route::get('parts/create', [PartController::class, 'create'])->middleware(['auth', 'verified'])->name('parts.create');
Route::post('parts', [PartController::class, 'store'])->middleware('auth', 'verified')->name('parts.store');
Route::get('parts/{part}', [PartController::class, 'show'])->middleware(['auth', 'verified'])->name('parts.view');
Route::get('parts/{part}/edit', [PartController::class, 'edit'])->middleware(['auth', 'verified'])->name('parts.edit');
Route::put('parts/{part}', [PartController::class, 'update'])->middleware(['auth', 'verified'])->name('parts.update');
Route::delete('parts/{part}', [PartController::class, 'destroy'])->middleware(['auth', 'verified'])->name('parts.delete');


require __DIR__.'/settings.php';
