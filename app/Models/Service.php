<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Service extends Model
{
     use HasFactory, HasTranslations;

    protected $fillable = [
        'title',
        'description',
    ];

    public $translatable = ['title', 'description'];
      public function media()
    {
        return $this->morphMany(Media::class, 'mediable');
    }
}
