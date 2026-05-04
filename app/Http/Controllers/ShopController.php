<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    public function index(Request $request)
{
    $sort = $request->get('sort', 'popular');

    $query = Product::with('images')
        ->where('is_active', true);

    match ($sort) {
        'newest' => $query->latest(),
        'price-asc' => $query->orderBy('price', 'asc'),
        'price-desc' => $query->orderBy('price', 'desc'),
        default => $query->orderBy('created_at', 'desc'),
    };

    $products = $query->get();

    return view('pages.shop', compact('products', 'sort'));
}
}
