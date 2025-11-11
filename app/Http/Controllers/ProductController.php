<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function dailyBestSells()
    {
        // Fetch the top-selling products (adjust as needed)
        $products = Product::orderBy('sales_count', 'desc')->take(8)->get();
        return view('partials.daily-best-sells', compact('products'));
    }

    public function getData()
    {
        $popularProducts = Product::where('is_popular', true)->query()->take(8)->get();
        $dailyBestSells = Product::where('is_daily_best_seller', true)->query()->take(5)->get();
       // $dailyBestSells = Product::where('is_daily_best_sell', true)->get();

        return view('home', compact('popularProducts', 'dailyBestSells'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product.show', compact('product'));
    }
    // Product.php
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
