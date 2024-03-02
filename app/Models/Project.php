<?php

namespace App\Models;

use App\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'title'
    ];
     public function images()
    {
        return $this->morphMany(Media::class, 'mediable');
    }
}
