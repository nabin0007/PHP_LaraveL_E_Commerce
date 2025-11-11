<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;
class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Prevent foreign key constraint issues during truncate
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        //Menu::truncate();
        DB::table('menus')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // --- Main Menu ---
         Menu::create(['title' => 'Home', 'url' => '/', 'is_dropdown' => false]);
         Menu::create(['title' => 'Shop', 'url' => '/shop', 'is_dropdown' => false]);
        Menu::create(['title' => 'About', 'url' => '/about', 'is_dropdown' => false]);
       Menu::create(['title' => 'Contact', 'url' => '/contact', 'is_dropdown' => false]);
        Menu::create(['title' => 'Dashboard', 'url' => '/dashboard', 'is_dropdown' => false]);

        // --- Dropdown Menu ---
        $dropdown = Menu::create(['title' => 'Dropdown Menu', 'is_dropdown' => true]);
        Menu::create(['title' => 'Dropdown Link 1', 'url' => '/link1', 'parent_id' => $dropdown->getAttribute('id')]);
        Menu::create(['title' => 'Dropdown Link 2', 'url' => '/link2', 'parent_id' => $dropdown->getAttribute('id')]);
        Menu::create(['title' => 'Dropdown Link 3', 'url' => '/link3', 'parent_id' => $dropdown->getAttribute('id')]);

        // --- Mega Menu ---
        $mega = Menu::create(['title' => 'Mega Menu', 'is_dropdown' => true]);
        Menu::create(['title' => 'Mega Link 1', 'url' => '/mega1', 'parent_id' => $mega->getAttribute('id')]);
        Menu::create(['title' => 'Mega Link 2', 'url' => '/mega2', 'parent_id' => $mega->getAttribute('id')]);
    }
}
