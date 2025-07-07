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
            ['name' => [
                'id' => 'Laravel',
                'en' => 'Laravel',
            ]],
            ['name' => [
                'id' => 'PHP',
                'en' => 'PHP',
            ]],
            ['name' => [
                'id' => 'JavaScript',
                'en' => 'JavaScript',
            ]],
            ['name' => [
                'id' => 'Vue.js',
                'en' => 'Vue.js',
            ]],
            ['name' => [
                'id' => 'React',
                'en' => 'React',
            ]],
        ];

        \App\Models\Tag::truncate();
        foreach ($tags as $tag) {
            \App\Models\Tag::create($tag);
        }
    }
}
