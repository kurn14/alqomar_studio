<?php

namespace App\Models;

use Filament\Resources\Concerns\Translatable;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Testimonial extends Model
{

    use HasTranslations;

    protected $translatable = ['message'];
    protected $casts = [
        'message' => 'array',
    ];
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
