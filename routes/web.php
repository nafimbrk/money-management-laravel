<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;

Route::get('/register', [AuthController::class, 'registerView'])->name('register.view');
Route::post('/register', [AuthController::class, 'register'])->name('register.store');
Route::get('/login', [AuthController::class, 'loginView'])->name('login.view');
Route::post('/login', [AuthController::class, 'login'])->name('login.store');

Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::resource('/category', CategoryController::class);
});
