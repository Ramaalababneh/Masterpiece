<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
// ______________________

// Route::get('/', function () {
//     return view('dashboard.pages.category.index');
// });

// Route::get('/', function () {
//     return view('dashboard.pages.category.index');
// });

// Dashboard routes
Route::resource('/category', CategoryController::class);

Route::resource('/admin'   , AdminController::class);

Route::resource('/user'   , UserController::class);

Route::resource('/discount'   , DiscountController::class);

Route::resource('/item'   , ItemController::class);

Route::resource('/order'   , OrderController::class);


// //adminlogin
// Route::get('/user', [UserController::class, 'index']);
// Route::post('/adminLoginPost', [AdminLoginController::class, 'adminLoginPost'])->name('adminLogin');
// Route::get('/homeAdmin',[CountController::class, 'index'])->name('homeAdmin')->middleware('isLogedin');

//adminLogout

// Route::get('/adminLogout', [AdminLoginController::class, 'adminLogout'])->name('adminLogout');
// Route::get('/dash', [AdminLoginController::class, 'adminLogout']);

Route::get('/', function () {
    return view('dashboard.pages.users.index');
});