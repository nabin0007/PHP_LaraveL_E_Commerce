<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;
class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [
            ['title' => 'Home', 'url' => '/'],
            ['title' => 'Shop', 'url' => '/shop'],
            ['title' => 'About', 'url' => '/about'],
            ['title' => 'Contact', 'url' => '/contact'],
            ['title' => 'Dashboard', 'url' => '/dashboard'],
        ];

        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}
