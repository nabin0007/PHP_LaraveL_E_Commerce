<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Menu;
use App\Models\Category;


use App\Models\BannerSection;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            MenuSeeder::class,
            CategorySeeder::class,
            SliderSeeder::class,
            BannerSectionSeeder::class,
            ProductSeeder::class,
            
        ]);

        

    }
}
