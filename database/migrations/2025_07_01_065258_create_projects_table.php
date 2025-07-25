<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            
            // $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');

            $table->integer('category_id');

            $table->json('title');
            $table->string('slug')->unique();
            $table->json('content');
            $table->string('image')->nullable();
            $table->date('project_date')->nullable();
            $table->string('client')->nullable();
            $table->string('url')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
