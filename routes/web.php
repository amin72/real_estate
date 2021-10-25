<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ListingsController;


Route::name('pages.')->group(function () {
    Route::get('/', [PagesController::class, 'index'])->name('index');
    Route::get('/about', [PagesController::class, 'about'])->name('about');
});

Route::resource('listings', ListingsController::class);
Route::get('listings/search', [ListingsController::class, 'search'])
    ->name('listings.search');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
