<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::prefix('admin')->group(function () {
    Route::get('login', [AdminController::class, 'login']);
    Route::post('login', [AdminController::class, 'post_login'])->name('admin.login');

    Route::middleware(['auth', 'user-access:admin'])->group(function () {
        Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
    });
});
