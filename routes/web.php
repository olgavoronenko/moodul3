<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;

Route::view('/', 'home');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');

Route::get('/products/{product}', [ProductController::class, 'show'])
    ->name('products.show');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


