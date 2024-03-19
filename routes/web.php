<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebpageController;

// Route::get('/', function () {
//     return view('webpage');
// });

Route::get('/', [WebpageController::class, 'home'])->name('home');

Route::prefix('auth')->group(function () {
    Route::get('/', [WebpageController::class, 'loginRegister'])->name('loginRegister');
    Route::get('/login', [WebpageController::class, 'login'])->name('login');
    Route::get('/register', [WebpageController::class, 'register'])->name('register');
    Route::get('/forgot-password', [WebpageController::class, 'forgotPassword'])->name('forgotPassword');
});

