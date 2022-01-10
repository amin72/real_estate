<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ListingsController;
use App\Http\Controllers\DashboardController;


Route::name('pages.')->group(function () {
    Route::get('/', [PagesController::class, 'index'])->name('index');
    Route::get('/about', [PagesController::class, 'about'])->name('about');
});


Route::resource('listings', ListingsController::class);


// Route::name('dashboard.')->middleware(['auth'])->group(function() {
Route::name('dashboard.')->group(function() {
    Route::get('dashboard', [DashboardController::class, 'index'])
        ->middleware('auth')
        ->name('index');

    Route::put('dashboard/{id}', [DashboardController::class, 'update'])
        ->middleware('auth')
        ->name('update');
});


require __DIR__.'/auth.php';
