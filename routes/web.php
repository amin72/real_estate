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
        ->name('index');
    
    Route::post('update_info', [DashboardController::class, 'update_info'])
        ->name('update_info');
});


require __DIR__.'/auth.php';
