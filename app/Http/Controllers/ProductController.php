<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function show(string $slug)
    {
        $products = config('products');

        abort_unless(isset($products[$slug]), 404);

        return view('products.show', [
            'product' => $products[$slug],
            'slug' => $slug,
        ]);
    }
}