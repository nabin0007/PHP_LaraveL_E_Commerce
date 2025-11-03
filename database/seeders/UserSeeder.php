<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin only if it doesn't exist
        User::firstOrCreate(
            ['email' => 'admin@a.com'], // unique key
            [
                'name' => 'Admin',
                'password' => bcrypt('1'),
            ]
        );

        // Create 10 random users
        User::factory(10)->create();
    }
}
