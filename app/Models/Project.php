<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Project extends Model
{

    // https://spatie.be/docs/laravel-translatable/v6/installation-setup
    use HasTranslations;

    public array $translatable = [
        'title',
        'content',
    ];
    
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'content',
        'image',
        'project_date',
        'client',
        'url',
    ];

    protected $casts = [
        'title' => 'array',
        'content' => 'array',
    ];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }
}
