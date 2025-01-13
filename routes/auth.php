<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::controller(LoginController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/signup', 'index')->name('signup');
        Route::post('/process-login', 'processLogin')->name('login.process');
    });
});
