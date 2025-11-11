<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Dairy, Bread & Eggs', 'slug' => 'dairy-bread-eggs', 'image' => 'assets/images/category/category-dairy-bread-eggs.jpg', 'link' => '#', 'sort_order' => 1],
            ['name' => 'Snack & Munchies', 'slug' => 'snack-munchies', 'image' => 'assets/images/category/category-snack-munchies.jpg', 'link' => '#', 'sort_order' => 2],
            ['name' => 'Bakery & Biscuits', 'slug' => 'bakery-biscuits', 'image' => 'assets/images/category/category-bakery-biscuits.jpg', 'link' => '#', 'sort_order' => 3],
            ['name' => 'Instant Food', 'slug' => 'instant-food', 'image' => 'assets/images/category/category-instant-food.jpg', 'link' => '#', 'sort_order' => 4],
            ['name' => 'Tea, Coffee & Drinks', 'slug' => 'tea-coffee-drinks', 'image' => 'assets/images/category/category-tea-coffee-drinks.jpg', 'link' => '#', 'sort_order' => 5],
            ['name' => 'Fruits & Vegetables', 'slug' => 'fruits-vegetables', 'image' => 'assets/images/category/category-fruits-vegetables.jpg', 'link' => '#', 'sort_order' => 11],
            ['name' => 'Atta, Rice & Dal', 'slug' => 'atta-rice-dal', 'image' => 'assets/images/category/category-atta-rice-dal.jpg', 'link' => '#', 'sort_order' => 6],
            ['name' => 'Baby Care', 'slug' => 'baby-care', 'image' => 'assets/images/category/category-baby-care.jpg', 'link' => '#', 'sort_order' => 7],
            ['name' => 'Chicken, Meat & Fish', 'slug' => 'chicken-meat-fish', 'image' => 'assets/images/category/category-chicken-meat-fish.jpg', 'link' => '#', 'sort_order' => 8],
            ['name' => 'Cleaning Essentials', 'slug' => 'cleaning-essentials', 'image' => 'assets/images/category/category-cleaning-essentials.jpg', 'link' => '#', 'sort_order' => 9],
            ['name' => 'Pet Care', 'slug' => 'pet-care', 'image' => 'assets/images/category/category-pet-care.jpg', 'link' => '#', 'sort_order' => 10],
        ];

        foreach ($categories as $category) {
            // updateOrCreate ensures no duplicate slug
            Category::updateOrCreate(
                ['slug' => $category['slug']],
                $category
            );
        }
    }
}
