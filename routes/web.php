<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

Route::view('/', 'home');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');


