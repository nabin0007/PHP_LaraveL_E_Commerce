<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Dairy, Bread & Eggs'],
            ['name' => 'Snacks & Munchies'],
            ['name' => 'Fruits & Vegetables'],
            ['name' => 'Cold Drinks & Juices'],
            ['name' => 'Breakfast & Instant Food'],
            ['name' => 'Bakery & Biscuits'],
            ['name' => 'Chicken, Meat & Fish'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
