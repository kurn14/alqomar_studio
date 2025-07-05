<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    
    protected $fillable = [
        'project_id',
        'name',
        'position',
        'message',
        'image',
        'company',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
