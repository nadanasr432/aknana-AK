<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Range extends Model
{
    use HasFactory;

    protected $fillable = ['en_title', 'en_text', 'ar_title', 'ar_text'];

    public function media()
    {
        return $this->morphMany(Media::class, 'mediable');
    }
}
