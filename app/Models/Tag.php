<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name',
    ];

    
    protected $casts = [
        'name' => 'array',
    ];   

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
