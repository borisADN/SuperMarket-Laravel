<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/', [AuthController::class, 'store'])->name('store');
Route::post('/login', [AuthController::class, 'handle_login'])->name('handle_login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/home', [MainController::class, 'home'])->name('home');
    Route::resource('/products', ProductController::class);
    Route::resource('/categories', CategoryController::class);
});



Route::get('/charts1', [ChartController::class, 'chart1'])->name('chart1');
Route::get('/charts2', [ChartController::class, 'chart2'])->name('chart2');

//return edit profile view

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/edit-profile', [AuthController::class, 'editProfile'])->name('edit-profile');
Route::post('/edit-profile', [AuthController::class, 'updateProfile'])->name('update-profile');
// Route::('/edit', [AuthController::class, 'update'])->name('update-profile');
