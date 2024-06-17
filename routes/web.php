<?php

use App\Http\Controllers\AboutMeController;
use Illuminate\Support\Facades\Route;

Route::get('/about', [AboutMeController::class, 'about']);

Route::get('/skills', function () {
    return view('Skills');
});

Route::get('/hobbies', function () {
    return view('Hobbies');
});
