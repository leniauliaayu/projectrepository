<<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RepositoryController;

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('admin/users', UserController::class);
    Route::resource('admin/repositories', RepositoryController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Add this line for non-admin users
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user')->middleware('auth');