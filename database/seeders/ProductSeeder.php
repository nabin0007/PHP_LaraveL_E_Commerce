<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Disable foreign key checks to safely truncate the table
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('products')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Create or fetch categories
        $categories = [
            'Tea, Coffee & Drinks' => Category::firstOrCreate(['slug' => 'tea-coffee-drinks'], ['name' => 'Tea, Coffee & Drinks']),
            'Fruits & Vegetables' => Category::firstOrCreate(['slug' => 'fruits-vegetables'], ['name' => 'Fruits & Vegetables']),
            'Snack & Munchies' => Category::firstOrCreate(['slug' => 'snack-munchies'], ['name' => 'Snack & Munchies']),
            'Bakery & Biscuits' => Category::firstOrCreate(['slug' => 'bakery-biscuits'], ['name' => 'Bakery & Biscuits']),
            'Instant Food' => Category::firstOrCreate(['slug' => 'instant-food'], ['name' => 'Instant Food']),
            'Dairy, Bread & Eggs' => Category::firstOrCreate(['slug' => 'dairy-bread-eggs'], ['name' => 'Dairy, Bread & Eggs']),
        ];

        // Define products with labels
        $products = [
            ['name' => 'Roast Ground Coffee', 'category' => 'Tea, Coffee & Drinks', 'price' => 18, 'discount_price' => 13, 'image' => 'assets/images/products/product-img-11.jpg', 'is_popular' => false, 'is_daily_best_sell' => true, 'label' => null],
            ['name' => 'Crushed Tomatoes', 'category' => 'Fruits & Vegetables', 'price' => 18, 'discount_price' => 13, 'image' => 'assets/images/products/product-img-12.jpg', 'is_popular' => false, 'is_daily_best_sell' => true, 'label' => null],
            ['name' => 'Golden Pineapple', 'category' => 'Fruits & Vegetables', 'price' => 18, 'discount_price' => 13, 'image' => 'assets/images/products/product-img-13.jpg', 'is_popular' => false, 'is_daily_best_sell' => true, 'label' => 'Best'],

            ['name' => "Haldiram's Sev Bhujia", 'category' => 'Snack & Munchies', 'price' => 18, 'discount_price' => 24, 'image' => 'assets/images/products/product-img-1.jpg', 'is_popular' => true, 'is_daily_best_sell' => false, 'label' => 'Sale'],
            ['name' => "NutriChoice Digestive", 'category' => 'Bakery & Biscuits', 'price' => 24, 'discount_price' => null, 'image' => 'assets/images/products/product-img-2.jpg', 'is_popular' => true, 'is_daily_best_sell' => false, 'label' => '14%'],
            ['name' => "Cadbury 5 Star Chocolate", 'category' => 'Bakery & Biscuits', 'price' => 32, 'discount_price' => 35, 'image' => 'assets/images/products/product-img-3.jpg', 'is_popular' => true, 'is_daily_best_sell' => false, 'label' => null],
            ['name' => "Onion Flavour Potato", 'category' => 'Snack & Munchies', 'price' => 3, 'discount_price' => 5, 'image' => 'assets/images/products/product-img-4.jpg', 'is_popular' => true, 'is_daily_best_sell' => false, 'label' => 'Hot'],
            ['name' => "Salted Instant Popcorn", 'category' => 'Instant Food', 'price' => 13, 'discount_price' => 18, 'image' => 'assets/images/products/product-img-5.jpg', 'is_popular' => true, 'is_daily_best_sell' => false, 'label' => null],
            ['name' => "Blueberry Greek Yogurt", 'category' => 'Dairy, Bread & Eggs', 'price' => 18, 'discount_price' => 24, 'image' => 'assets/images/products/product-img-6.jpg', 'is_popular' => true, 'is_daily_best_sell' => false, 'label' => 'Sale'],
            ['name' => "Britannia Cheese Slices", 'category' => 'Dairy, Bread & Eggs', 'price' => 24, 'discount_price' => null, 'image' => 'assets/images/products/product-img-7.jpg', 'is_popular' => true, 'is_daily_best_sell' => false, 'label' => null],
            ['name' => "Kellogg's Original Cereals", 'category' => 'Instant Food', 'price' => 32, 'discount_price' => 35, 'image' => 'assets/images/products/product-img-8.jpg', 'is_popular' => true, 'is_daily_best_sell' => false, 'label' => null],

            ['name' => "Slurrp Millet Chocolate", 'category' => 'Snack & Munchies', 'price' => 3, 'discount_price' => 5, 'image' => 'assets/images/products/product-img-9.jpg', 'is_popular' => true, 'is_daily_best_sell' => false, 'label' => null],
            ['name' => "Amul Butter - 500 g", 'category' => 'Dairy, Bread & Eggs', 'price' => 13, 'discount_price' => 18, 'image' => 'assets/images/products/product-img-10.jpg', 'is_popular' => true, 'is_daily_best_sell' => false, 'label' => null],
        ];

        // Insert products
        foreach ($products as $product) {
            Product::create([
                'name' => $product['name'],
                'slug' => Str::slug($product['name']),
                'category_id' => $categories[$product['category']]->id,
                'description' => $product['description'] ?? '',
                'price' => $product['price'],
                'discount_price' => $product['discount_price'],
                'image' => $product['image'],
                'is_popular' => $product['is_popular'] ?? false,
                'is_daily_best_sell' => $product['is_daily_best_sell'] ?? false,
                'label' => $product['label'] ?? null,
                'status' => true,
                'rating' => 4.5,
                'rating_count' => 149,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        $this->command->info('13 Products seeded successfully with labels!');
    }
}
