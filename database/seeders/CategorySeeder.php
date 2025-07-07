<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //pleas make dummy category data
        $categories = [
            ['name' => [
                'id' => 'Desain Grafis',
                'en' => 'Graphic Design',
            ]],
            ['name' => [
                'id' => 'Pengembangan Web',
                'en' => 'Web Development',
            ]],
            ['name' => [
                'id' => 'Pengembangan Aplikasi Seluler',
                'en' => 'Mobile Development',
            ]],
            ['name' => [
                'id' => 'e-Government',
                'en' => 'e-Government',
            ]],
        ];

        // Clear existing categories
        \App\Models\Category::truncate();

        foreach ($categories as $category) {
            \App\Models\Category::create([
                'name' => $category['name'],
            ]);
        }
    }
}
