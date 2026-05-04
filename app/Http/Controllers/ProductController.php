<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        $product->load(['images', 'colors', 'sizes']);

        abort_unless($product->is_active, 404);

        return view('pages.product', compact('product'));
    }
}
