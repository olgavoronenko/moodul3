<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::with(['images', 'colors', 'sizes'])
            ->where('is_active', true)
            ->latest()
            ->get();

        return view('pages.shop', compact('products'));
    }
}
