<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/category', [\App\Http\Controllers\CategoryController::class, 'category'])->name('category');

Route::prefix('/category')->group(function () {
    Route::get('/index', [\App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
    Route::get('/create', [\App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
    Route::get('/edit/{category}', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
    Route::get('/show/{category}', [\App\Http\Controllers\CategoryController::class, 'show'])->name('category.show');
    Route::post('/store', [\App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
});

Route::prefix('/product')->group(function () {
    Route::get('/index', [\App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
    Route::get('/create', [\App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
    Route::get('/edit/{product}', [\App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
    Route::get('/show/{product}', [\App\Http\Controllers\ProductController::class, 'show'])->name('product.show');
    Route::post('/store', [\App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
    Route::put('/update/{product}', [\App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
    Route::delete('/delete/{product}',[\App\Http\Controllers\ProductController::class, 'destroy'])->name('product.delete');
});
