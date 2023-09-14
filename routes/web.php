<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\CartExclusiveController;

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

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/products', [FrontController::class, 'product'])->name('front.products');
Route::post('/fetch/test', [FrontController::class, 'fetchTest']);
Route::get('/index', [MessageController::class, 'index'])->name('messageIndex');


// 登入者可以使用
Route::middleware('auth')->group(function () {
    Route::prefix('/message')->group(function () {
        Route::post('/replayStore/{id}', [MessageController::class, 'replayStore'])->name('replayStore');
        Route::post('/store', [MessageController::class, 'store'])->name('messageStore');
        Route::put('/update/{id}', [MessageController::class, 'update'])->name('messageUpdate');
        Route::delete('/destroy/{id}', [MessageController::class, 'destroy'])->name('messageDestroy');
    });
    Route::prefix('/reply')->group(function () {
        Route::put('/update/{id}', [ReplyController::class, 'update'])->name('replyUpdate');
        Route::delete('/destroy/{id}', [ReplyController::class, 'destroy'])->name('replyDestroy');
    });
    Route::middleware('role.weight:2')->prefix('/user/infomation')->group(function () {
        Route::get('/', [FrontController::class, 'user_info'])->name('user.info');
        Route::post('/update', [FrontController::class, 'user_info_update'])->name('user.info.update');
        Route::get('/user/order/list',[FrontController::class,'order_list'])->name('user.list');
        Route::get('/user/order/list/detail/{oder_forms_id}',[FrontController::class,'order_detail'])->name('user.order.detail');
    });
    Route::post('/products/add-carts', [FrontController::class, 'add_cart'])->name('front.addCart');
    Route::middleware('role.weight:2')->prefix('/products')->group(function () {
        Route::get('/cart-step01', [CartExclusiveController::class, 'step01'])->name('cart.step01');
        Route::put('/updata-qty', [CartExclusiveController::class, 'updateQty'])->name('cart.updateQty');
        Route::delete('cart-step01/delete', [CartExclusiveController::class, 'deleteCart'])->name('cart.deleteCart');
        
        Route::get('/cart-step02', [CartExclusiveController::class, 'step02'])->name('cart.step02');
        Route::post('/cart-step02/store', [CartExclusiveController::class, 'step02_store'])->name('cart.step02Store');
        Route::get('/cart-step03', [CartExclusiveController::class, 'step03'])->name('cart.step03');
        Route::post('/cart-step03/store', [CartExclusiveController::class, 'step03_store'])->name('cart.step03Store');
        Route::get('/cart-step04', [CartExclusiveController::class, 'step04'])->name('cart.step04');
    });
});


// 只有管理者才能進入
Route::middleware(['auth', 'role.weight:1'])->prefix('/admin')->group(function () {
    Route::get('/', [BackendController::class, 'index'])->name('backend.index');

    Route::prefix('/product')->group(function () {
        Route::get('/list', [ProductController::class, 'index'])->name('product.index');
        Route::get('/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/store', [ProductController::class, 'store'])->name('product.store');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
        Route::put('/update/{id}', [ProductController::class, 'update'])->name('product.update');
        Route::delete('/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
    });

    Route::resource('/type', TypeController::class);
    Route::get('/playground', [FrontController::class, 'test'])->name('test.step1');
    Route::post('/playground-step1/store', [FrontController::class, 'step1_store'])->name('test.step1Store');
    Route::get('/playground-step2', [FrontController::class, 'test2'])->name('test.step2');
});

Route::get('/ECPay/{order_id}',[FrontController::class,'ec_pay'])->name('ecpay');
Route::get('/ECPay/return_back',[FrontController::class,'ec_pay_return'])->name('ecpay.returnBack');


require __DIR__ . '/auth.php';
