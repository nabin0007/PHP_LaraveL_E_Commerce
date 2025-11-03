<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $slides = [
            [
                'image' => '/assets/images/slider/slide-1.jpg',
                'tagline' => 'Opening Sale Discount 50%',
                'title' => 'SuperMarket For Fresh Grocery',
                'subtitle' => 'Introduced a new model for online grocery shopping and convenient home delivery.',
                'link' => '#!'
            ],
            [
                'image' => '/assets/images/slider/slider-2.jpg',
                'tagline' => 'Free Shipping - orders over $100',
                'title' => 'Free Shipping on orders over <span class="text-green-600">$100</span>',
                'subtitle' => 'Free Shipping to First-Time Customers Only, after promotions and discounts are applied.',
                'link' => '#!'
            ]
        ];

        return view('home.index', compact('slides'));
    }

}

