<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class Header extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['title', 'text'];
    public $translatable = ['title', 'text'];

    public function images(): MorphMany
    {
        return $this->morphMany(Media::class, 'mediable');
    }
}
