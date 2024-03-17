<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory ,HasTranslations;
    protected $fillable = ['title', 'text','status'];
    public $translatable = ['title', 'text'];
    public function media()
    {
        return $this->morphMany(Media::class, 'mediable');
    }
}
