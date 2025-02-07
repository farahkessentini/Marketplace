<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontendController;

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
Route::get('/',function(){
    return view ('frontend.index');
});
//route123
Route::get('/shopp',function(){
    return view ('frontend.index');
});
//  Backend
Route::prefix('admin')->group(function () {
    Route::get('/', [BackendController::class, 'index'])->name('backend.index');
    Route::get('/login', [BackendController::class, 'login'])->name('backend.login');
    Route::get('/register', [BackendController::class, 'register'])->name('backend.register');
    Route::get('/layout-static', [BackendController::class, 'layoutStatic'])->name('backend.layout-static');
    Route::get('/layout-sidenav-light', [BackendController::class, 'layoutSidenavLight'])->name('backend.layout-sidenav-light');
    Route::get('/charts', [BackendController::class, 'charts'])->name('backend.charts');
    Route::get('/tables', [BackendController::class, 'tables'])->name('backend.tables');
    Route::get('/password', [BackendController::class, 'password'])->name('backend.password');
    Route::get('/401', [BackendController::class, 'error401'])->name('backend.401');
    Route::get('/404', [BackendController::class, 'error404'])->name('backend.404');
    Route::get('/500', [BackendController::class, 'error500'])->name('backend.500');
});
//endbackend
//frontend
Route::prefix('shop')->group(function () {
    Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
    Route::get('/cart', [FrontendController::class, 'cart'])->name('frontend.cart');
    Route::get('/checkout', [FrontendController::class, 'checkout'])->name('frontend.checkout');
    Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
    Route::get('/login', [FrontendController::class, 'login'])->name('frontend.login');
    Route::get('/my-account', [FrontendController::class, 'myAccount'])->name('frontend.my-account');
    Route::get('/product-detail', [FrontendController::class, 'productDetail'])->name('frontend.product-detail');
    Route::get('/product-list', [FrontendController::class, 'productList'])->name('frontend.product-list');
    Route::get('/wishlist', [FrontendController::class, 'wishlist'])->name('frontend.wishlist');
});