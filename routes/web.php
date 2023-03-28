<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [AuthController::class, 'index'])->name('login.index');
Route::post('/login', [AuthController::class, 'login'])->name('login');


Route::get('/register/student', [AuthController::class, 'register'])->name('register');
Route::post('/register/student', [AuthController::class, 'userRegister'])->name('userRegister');


Route::group(['middleware' => ['auth']], function () {

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('products', ProductController::class);
});

Route::get('/', [HomeController::class, 'index'])->name('home');
