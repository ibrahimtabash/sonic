<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        $products = Product::where('is_active', true)
            ->with([
                'prices' => function ($query) {
                    $query->where('currency_id', session('currency'))
                        ->with('currency');
                }
            ])
            ->get();

        $product->load([
            'prices' => function ($query) {
                $query->where('currency_id', session('currency'))
                    ->with('currency');
            }
        ]);

        return view('products.show', compact('product', 'products'));
    }
}
