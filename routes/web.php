<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SellController;
use App\Models\Sell;

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/' , [AuthController::class, 'store'])->name('store');
Route::post('/login' , [AuthController::class, 'handle_login'])->name('handle_login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


// route::post('/', [AuthController::class, 'login_action'])->name('login_action');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

Route::get('/', [MainController::class, 'home'])->name('home');

Route::resource('/categories', CategoryController::class);
Route::resource('/products', ProductController::class);
Route::get('/charts1', [ChartController::class, 'chart1'])->name('chart1');
Route::get('/charts2', [ChartController::class, 'chart2'])->name('chart2');


Route::get('sells', [SellController::class, 'index'])->name('sells.index');
Route::get('sells/{id}', [SellController::class, 'show'])->name('sells.show');

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SaleController;

Route::get('checkout', [PaymentController::class, 'createCheckoutSession'])->name('checkout');
Route::get('payment-success', [PaymentController::class, 'success'])->name('payment.success');
Route::get('payment-cancel', [PaymentController::class, 'cancel'])->name('payment.cancel');
Route::resource('sales', [SaleController::class, 'index']);

Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');
Route::post('/payment', [PaymentController::class, 'processPayment'])->name('payment.process');


