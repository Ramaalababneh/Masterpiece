<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CartController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// _____________________

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

// Route::get('/dashboard', function () {
//     return view('dashboard.pages.users.index');
// });



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

// ======================= Cart routes 
Route::get('/addtocart/{id}', [CartController::class, 'store'])->name('addtocart');
Route::get('/quantitycart/{id}/{type}', [CartController::class, 'quantitycart'])->name('quantitycart');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/deletecart/{item}', [CartController::class, 'destroy'])->name('deletecart');
Route::get('/checkout', [CartController::class, 'Checkout'])->name('checkout')->middleware(['auth', 'verified']);
Route::post('/checkoutcreate', [CartController::class, 'create'])->middleware(['auth', 'verified'])->name('checkoutcreate');
Route::get('paypal/success', [CartController::class, 'success'])->name('paypal_success');
Route::get('paypal/cancel', [CartController::class, 'cancel'])->name('paypal_cancel');

// ======================= End Cart routes 

Route::get('/about', function () {
    return view('website.pages.about.index');
});

Route::get('/contact', function () {
    return view('website.pages.contact.index');
});

Route::get('/thankyou', function () {
    return view('website.pages.thankyou.index');
})->name('thankyou');

require __DIR__.'/auth.php';




//adminlogin
Route::get('/adminLogin', [adminLoginController::class, 'adminLogin'])->name('adminLogin');
Route::post('/adminLoginPost', [adminLoginController::class, 'adminLoginPost'])->name('adminLogin');
Route::get('/homeAdmin', [AdminController::class, 'index'])->name('homeAdmin'); 
// ->middleware('isLogedin');
//adminLogout
Route::get('/adminLogout', [adminLoginController::class, 'adminLogout'])->name('adminLogout');
Route::get('/dash', [adminLoginController::class, 'adminLogout']);

