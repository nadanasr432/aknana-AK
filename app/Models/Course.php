<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Course extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'name',
        'date_of_course',
        'professor_name',
        'time_duration',
        'location',
        'female_count',
        'male_count',
    ];

    public $translatable = ['name', 'professor_name', 'time_duration', 'location'];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function media()
    {
        return $this->morphMany(Media::class, 'mediable');
    }
}
