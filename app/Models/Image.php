<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;

class Image extends Model
{
    use HasTranslations;

    protected $translatable = ['description'];

    protected $casts = [
        'description' => 'array',
    ];
    protected $fillable = [
        'path',
        'description',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    //buatan fungsi booted
    protected static function booted()
    {
        static::created(function (Image $image) {
            //increment sort value when a new image is created
            $image->sort = Image::where('project_id', $image->project_id)->max('sort') + 1;
            $image->save();            
            
        });
        static::deleted(function (Image $image) {
            // Delete the image file from the disk when the model is deleted
            if (Storage::exists($image->path)) {
                Storage::delete($image->path);
            }
        });
    }
}
