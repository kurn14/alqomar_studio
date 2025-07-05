<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //dummy data for tags
        $tags = [
            ['name' => 'Laravel'],
            ['name' => 'PHP'],
            ['name' => 'JavaScript'],
            ['name' => 'Vue.js'],
            ['name' => 'React'],
            ['name' => 'Node.js'],
        ];

        \App\Models\Tag::truncate();
        foreach ($tags as $tag) {
            \App\Models\Tag::create($tag);
        }
    }
}
