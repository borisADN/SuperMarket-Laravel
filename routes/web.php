<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SaleController;



use App\Models\Sell;

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/', [AuthController::class, 'store'])->name('store');
Route::post('/login', [AuthController::class, 'handle_login'])->name('handle_login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


// route::post('/', [AuthController::class, 'login_action'])->name('login_action');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

Route::get('/', [MainController::class, 'home'])->name('home');
Route::middleware('auth')->group(function () {
    Route::get('/home', [MainController::class, 'home'])->name('home');
    Route::resource('/products', ProductController::class);
    Route::resource('/categories', CategoryController::class);
});




Route::resource('/categories', CategoryController::class);
Route::resource('/products', ProductController::class);


Route::get('/charts1', [ChartController::class, 'chart1'])->name('chart1');
Route::get('/charts2', [ChartController::class, 'chart2'])->name('chart2');


//return edit profile view

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/edit-profile', [AuthController::class, 'editProfile'])->name('edit-profile');
Route::post('/edit-profile', [AuthController::class, 'updateProfile'])->name('update-profile');
// Route::('/edit', [AuthController::class, 'update'])->name('update-profile');



Route::get('/', [MainController::class, 'home'])->name('home');

Route::resource('/categories', CategoryController::class);
Route::resource('/products', ProductController::class);

Route::resource('/sells', SellController::class);

Route::get('sells/create', [SellController::class, 'create'])->name('sells.create');
Route::post('sells', [SellController::class, 'store'])->name('sells.store');

Route::get('sells/{sell}/delete', [SellController::class, 'delete'])->name('sells.delete');
Route::delete('sells/{sell}', [SellController::class, 'destroy'])->name('sells.destroy');
Route::get('sells', [SellController::class, 'index'])->name('sells.index');
Route::get('sells/{id}', [SellController::class, 'show'])->name('sells.show');



Route::get('checkout', [PaymentController::class, 'createCheckoutSession'])->name('checkout');
Route::get('payment-success', [PaymentController::class, 'success'])->name('payment.success');
Route::get('payment-cancel', [PaymentController::class, 'cancel'])->name('payment.cancel');
Route::resource( 'sales', SaleController::class);


Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');
Route::post('/payment', [PaymentController::class, 'processPayment'])->name('payment.process');



