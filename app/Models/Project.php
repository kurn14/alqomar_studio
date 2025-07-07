<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    
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
