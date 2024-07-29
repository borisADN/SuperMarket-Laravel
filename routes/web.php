<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

route::get('/', [AuthController::class, 'index'])->name('login');
// route::post('/', [AuthController::class, 'login_action'])->name('login_action');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

Route::get('/home', [MainController::class, 'home'])->name('home');

Route::resource('/categories', CategoryController::class);
Route::resource('/products', ProductController::class);
