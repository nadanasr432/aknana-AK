<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'date_of_period'];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
        protected static function boot()
    {
        parent::boot();

        static::saving(function ($course) {
          
            $maleCount = $course->reservations()->where('gender', 'male')->count();
            $femaleCount = $course->reservations()->where('gender', 'female')->count();
           $course->max_male_count = $maleCount;
            $course->max_female_count = $femaleCount;
        });
    }
}
