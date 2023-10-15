<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReviewController;
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

Route::resource('/review'   , ReviewController::class);

//Route::get('/review', 'ReviewController@index');



// //adminlogin
// Route::get('/user', [UserController::class, 'index']);
// Route::post('/adminLoginPost', [AdminLoginController::class, 'adminLoginPost'])->name('adminLogin');
// Route::get('/homeAdmin',[CountController::class, 'index'])->name('homeAdmin')->middleware('isLogedin');

//adminLogout

// Route::get('/adminLogout', [AdminLoginController::class, 'adminLogout'])->name('adminLogout');
// Route::get('/dash', [AdminLoginController::class, 'adminLogout']);

Route::get('/dashboard', function () {
    return view('dashboard.pages.users.index');
});



// Route::get('/', function () {
//     return view('website.pages.home.index');
// });

route::get('/', [CategoryController::class,'show'])->name('home');
route::get('/categoryHome/{id}', [CategoryController::class,'showItemsByCategory'])->name('category');
// Route::get('/category/{id}', 'CategoryController@showItemsByCategory')->name('category.items');
//Route::get('/item/{category_id}', 'ItemController@showSingleItem');
//Route::get('/item/{category_id}', 'ItemController@showSingleItem')->name('single-item');
Route::get('/item/{id}/{category_id}', [ItemController::class,'show'])->name('single-item');

Route::get('items/{itemId}/related', 'ItemController@showRelatedItems')->name('items.showRelatedItems');


