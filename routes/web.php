<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Api\cats;

Route::inertia('/', 'Welcome', [
    'canRegister' => Features::enabled(Features::registration()),
])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
    Route::inertia('portfolio', 'Portfolio')->name('portfolio');
});
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/api/user', [UserController::class, 'index']);
});



//Route::get('/api/cat', [cats::class, 'index']);

require __DIR__.'/settings.php';
