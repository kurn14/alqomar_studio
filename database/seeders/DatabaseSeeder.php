<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //calll seeders
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            // ProjectSeeder::class,
            TagSeeder::class,
        ]);
    }
}
