<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ReplyController;

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

require __DIR__.'/auth.php';

Route::get('/', [FrontController::class, 'index'])->name('front.index');

Route::middleware('auth')->prefix('/product')->group(function () {
    Route::get('/list', [ProductController::class, 'index'])->name('product.index');
    
    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/store', [ProductController::class, 'store'])->name('product.store');
    
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/update/{id}', [ProductController::class, 'update'])->name('product.update');
    
    Route::delete('/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
});


Route::resource('/type', TypeController::class);

Route::get('/playground', [FrontController::class, 'test']);
Route::post('/fetch/test', [FrontController::class, 'fetchTest']);


Route::middleware('auth')->prefix('/message')->group(function() {
    Route::get('/index', [MessageController::class, 'index'])->name('messageIndex');

    Route::post('/replayStore/{id}', [MessageController::class, 'replayStore'])->name('replayStore');
    Route::post('/store', [MessageController::class, 'store'])->name('messageStore');
    Route::put('/update/{id}', [MessageController::class, 'update'])->name('messageUpdate');
    // 刪除
    Route::delete('/destroy/{id}', [MessageController::class, 'destroy'])->name('messageDestroy');
});

Route::middleware('auth')->prefix('/reply')->group(function () {
    Route::put('/update/{id}', [ReplyController::class, 'update'])->name('replyUpdate');
    // 刪除
    Route::delete('/destroy/{id}', [ReplyController::class, 'destroy'])->name('replyDestroy');
});