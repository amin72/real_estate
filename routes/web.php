<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


Route::name('pages.')->group(function () {
    Route::get('/', [PagesController::class, 'index'])->name('index');
    Route::get('/about', [PagesController::class, 'about'])->name('about');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
