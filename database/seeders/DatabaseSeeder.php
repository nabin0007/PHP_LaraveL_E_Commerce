<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Menu;
use App\Models\Category;



class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
          //  UserSeeder::class,
           // MenuCategorySeeder::class,
            //MenuSeeder::class,
            //CategorySeeder::class,
        ]);


        // User::factory(10)->create();

        //User::factory()->create([
        //    'name' => 'Test User',
        //    'email' => 'test@example.com',
        //]);


        //// Create admin only if it doesn't exist
        //User::firstOrCreate(
        //    ['email' => 'admin@a.com'], // unique key
        //    [
        //        'name' => 'Admin',
        //        'password' => bcrypt('1'),
        //    ]
        //);

        //// Create 10 random users
        //User::factory(10)->create();




        //// Reset tables
        Menu::truncate();
        Category::truncate();
        // --- Categories (All Departments) ---
        $categories = [
            ['name' => 'Dairy, Bread & Eggs', 'slug' => 'dairy-bread-eggs'],
            ['name' => 'Snacks & Munchies', 'slug' => 'snacks-munchies'],
            ['name' => 'Fruits & Vegetables', 'slug' => 'fruits-vegetables'],
            ['name' => 'Cold Drinks & Juices', 'slug' => 'cold-drinks-juices'],
            ['name' => 'Breakfast & Instant Food', 'slug' => 'breakfast-instant-food'],
            ['name' => 'Bakery & Biscuits', 'slug' => 'bakery-biscuits'],
            ['name' => 'Chicken, Meat & Fish', 'slug' => 'chicken-meat-fish'],
        ];

        foreach ($categories as $cat) {
            Category::create($cat);
        }

        // --- Main Menu ---

        Menu::create(['title' => 'Home', 'url' => '/', 'is_dropdown' => false]);
       

        // Dropdown Menu with children
        $dropdown = Menu::create(['title' => 'Dropdown Menu', 'is_dropdown' => true]);
        Menu::create(['title' => 'Dropdown Link 1', 'url' => '/link1', 'parent_id' => $dropdown->id, 'is_dropdown' => false]);
        Menu::create(['title' => 'Dropdown Link 2', 'url' => '/link2', 'parent_id' => $dropdown->id, 'is_dropdown' => false]);
        Menu::create(['title' => 'Dropdown Link 3', 'url' => '/link3', 'parent_id' => $dropdown->id, 'is_dropdown' => false]);



        // Mega Menu
        $mega = Menu::create(['title' => 'Mega Menu', 'is_dropdown' => true]);
        Menu::create(['title' => 'Mega Link 1', 'url' => '/mega1', 'parent_id' => $mega->id, 'is_dropdown' => false]);
        Menu::create(['title' => 'Mega Link 2', 'url' => '/mega2', 'parent_id' => $mega->id, 'is_dropdown' => false]);


        Menu::create(['title' => 'Dashboard', 'url' => '/dashboard', 'is_dropdown' => false]);
    }
}
