<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BannerSection;

class BannerSectionSeeder extends Seeder
{
    public function run(): void
    {
        BannerSection::truncate();

        $sections = [
            // Horizontal banners
            [
                'title' => 'Fruits & Vegetables',
                'subtitle' => 'Get Upto 30% Off',
                'banner_image' => 'assets/images/banner/grocery-banner.png',
                'link' => '#',
                'banner_type' => 'horizontal',
                'active' => true,
            ],
            [
                'title' => 'Freshly Baked Buns',
                'subtitle' => 'Get Upto 25% Off',
                'banner_image' => 'assets/images/banner/grocery-banner-2.jpg',
                'link' => '#',
                'banner_type' => 'horizontal',
                'active' => true,
            ],

            // Vertical banner
            [
                'title' => '100% Organic Coffee Beans',
                'subtitle' => 'Get the best deal before close.',
                'banner_image' => 'assets/images/banner/banner-deal.jpg',
                'link' => '#',
                'banner_type' => 'vertical',
                'active' => true,
            ],
        ];

        BannerSection::insert($sections);
    }
}
