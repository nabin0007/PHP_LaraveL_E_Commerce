<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Slider;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::create([
            'image' => '/assets/images/slider/slide-1.jpg',
            'tagline' => 'Opening Sale Discount 50%',
            'title' => 'SuperMarket For Fresh Grocery',
            'subtitle' => 'Introduced a new model for online grocery shopping and convenient home delivery.',
            'link' => '#',
            'sort_order' => 1,
            'active' => true
        ]);

        Slider::create([
            'image' => '/assets/images/slider/slider-2.jpg',
            'tagline' => 'Free Shipping - orders over $100',
            'title' => 'Free Shipping on orders over $100',
            'subtitle' => 'Free Shipping to First-Time Customers Only, after promotions and discounts are applied.',
            'link' => '#',
            'sort_order' => 2,
            'active' => true
        ]);
    }
}
