<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;

Route::view('/', 'home');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');

Route::get('/products/{product}', [ProductController::class, 'show'])
    ->name('products.show');


