<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    // https://spatie.be/docs/laravel-translatable/v6/installation-setup

    protected $fillable = [
        'name',
    ];
    
    protected $casts = [
        'name' => 'array',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }


}
