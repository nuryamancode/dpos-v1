<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';


Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/manage-user', 'index')->name('manage.user');
    Route::get('/create/manage-user', 'create')->name('create.manage.user');
});
// Route::middleware('auth')->group(function () {

// });