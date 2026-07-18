<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $heroProducts = Product::query()
            ->where('is_active', true)
            ->where('is_featured', true)
            ->orderBy('sort_order')
            ->take(7)
            ->get();

        $products = Product::where('is_active', true)
            ->with([
                'prices' => function ($query) {
                    $query->where('currency_id', session('currency'));
                }
            ])
            ->get();

        return view('welcome', compact('heroProducts', 'products'));
    }
}
