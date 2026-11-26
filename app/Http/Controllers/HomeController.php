<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('products')->get();

        $products = Product::with('category')
            ->latest()
            ->take(8)
            ->get();

        $featuredProducts = Product::with('category')
            ->orderBy('price', 'desc')
            ->take(4)
            ->get();

        return view('home', compact(
            'categories',
            'products',
            'featuredProducts'
        ));
    }
}
