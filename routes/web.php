<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


//Route::prefix('admin')->group(function () {
//    Route::get('login', [AdminController::class, 'login']);
//    Route::post('login', [AdminController::class, 'post_login'])->name('admin.login');
//
//    Route::middleware(['auth', 'user-access:admin'])->group(function () {
//        Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
//    });
//});

Route::get('login', [UserController::class, 'login']);
Route::post('login', [UserController::class, 'authentication'])->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [UserController::class, 'home']);
    Route::get('/report', [UserController::class, 'report']);
    Route::get('/kantin', [UserController::class, 'kantin']);
    Route::get('/kemahasiswaan', [UserController::class, 'kemahasiswaan']);
    Route::get('/keasramaan', [UserController::class, 'keasramaan']);
    Route::post('/report', [UserController::class, 'post_report'])->name('report');
    Route::get('/history', [UserController::class, 'history']);
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});

Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);
