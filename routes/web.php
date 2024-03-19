<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebpageController;

// Route::get('/', function () {
//     return view('webpage');
// });

Route::get('/', [WebpageController::class, 'home']);
