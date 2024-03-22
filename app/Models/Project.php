<?php

namespace App\Models;

use App\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory, HasTranslations;
    protected $fillable = [
        'title',
        "url"
    ];
    public $translatable = ['title'];
     public function images()
    {
        return $this->morphMany(Media::class, 'mediable');
    }
}
