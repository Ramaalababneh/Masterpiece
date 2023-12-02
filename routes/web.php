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

// _________Dashboard____________
// ______________adminlogin
Route::get('/adminLogin', [adminLoginController::class, 'adminLogin'])->name('adminLogin');
Route::post('/adminLoginPost', [adminLoginController::class, 'adminLoginPost'])->name('adminLogin');
Route::get('/homeAdmin', [AdminLoginController::class, 'adminHome'])->name('homeAdmin')->middleware('isLogedin');
// ______________adminLogout
Route::get('/adminLogout', [adminLoginController::class, 'adminLogout'])->name('adminLogout');
Route::get('/dash', [adminLoginController::class, 'adminLogout']);
// ______________admin Dashboard CRUDS routes
Route::resource('/category', CategoryController::class)->middleware('isLogedin');

Route::resource('/admin'   , AdminController::class)->middleware('isLogedin');

Route::resource('/user'   , UserController::class)->middleware('isLogedin');

Route::resource('/discount'   , DiscountController::class)->middleware('isLogedin');

Route::resource('/item'   , ItemController::class)->middleware('isLogedin');

Route::resource('/order'   , OrderController::class)->middleware('isLogedin');

Route::resource('/review'   , ReviewController::class)->middleware('isLogedin');
// _________Dashboard END____________

//+++++++++++++++++++++++++++++++++++

// ===========WEBSITE==========
// ______________Category & Item start
route::get('/', [CategoryController::class,'show'])->name('home');
route::get('/categoryHome/{id}', [CategoryController::class,'showItemsByCategory'])->name('category');
Route::get('/item/{id}/{category_id}', [ItemController::class,'show'])->name('single-item');
Route::get('items/{itemId}/related', 'ItemController@showRelatedItems')->name('items.showRelatedItems');
// ______________Category & Item end

// ______________Cart routes 
Route::get('/addtocart/{id}', [CartController::class, 'store'])->name('addtocart');
Route::get('/quantitycart/{id}/{type}', [CartController::class, 'quantitycart'])->name('quantitycart');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/deletecart/{item}', [CartController::class, 'destroy'])->name('deletecart');
Route::get('/checkout', [CartController::class, 'Checkout'])->name('checkout');
// ->middleware(['auth', 'verified'])
Route::post('/checkoutcreate', [CartController::class, 'create'])->middleware(['auth', 'verified'])->name('checkoutcreate');
Route::get('paypal/success', [CartController::class, 'success'])->name('paypal_success');
Route::get('paypal/cancel', [CartController::class, 'cancel'])->name('paypal_cancel');
//_______________End Cart routes 

//_______________Static Pages start
Route::get('/about', function () {
    return view('website.pages.about.index');
});

Route::get('/contact', function () {
    return view('website.pages.contact.index');
});

Route::get('/thankyou', function () {
    return view('website.pages.thankyou.index');
})->name('thankyou');
//_________________Static Pages end
require __DIR__.'/auth.php';


