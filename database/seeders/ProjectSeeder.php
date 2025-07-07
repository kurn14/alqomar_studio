<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //make dummy seeder for project
        /*

        $table->integer('category_id');

        $table->string('title');
        $table->string('slug')->unique();
        $table->text('description')->nullable();
        $table->string('image')->nullable();
        $table->string('category')->nullable();
        $table->date('project_date')->nullable();
        $table->string('client')->nullable();
        $table->string('url')->nullable();
            */
        $projects = [
            [
                'category_id' => 1,
                'title' => 'Web Development Project',
                'slug' => 'web-development-project',
                'description' => 'This is a web development project.',
                // 'image' => 'web-development.jpg',
                'category' => 'Web Development',
                'project_date' => '2025-01-01',
                'client' => 'Client A',
                'url' => 'https://example.com/web-development-project'
            ],
            [
                'category_id' => 2,
                'title' => 'Mobile Development Project',
                'slug' => 'mobile-development-project',
                'description' => 'This is a mobile development project.',
                // 'image' => 'mobile-development.jpg',
                'project_date' => '2025-02-01',
                'client' => 'Client B',
                'url' => 'https://example.com/mobile-development-project'
            ],
        ];

        // Clear existing projects
        \App\Models\Project::truncate();
        foreach ($projects as $project) {
            \App\Models\Project::create([
                'category_id' => $project['category_id'],
                'title' => $project['title'],
                'slug' => $project['slug'],
                'description' => $project['description'],
                // 'image' => $project['image'],
                'category' => $project['category'],
                'project_date' => $project['project_date'],
                'client' => $project['client'],
                'url' => $project['url'],
            ]);
        }
    }
}
