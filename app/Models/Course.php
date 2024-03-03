<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
   protected $fillable = [
        'name',
        'date_of_course',
        'professor_name',
        'time_duration',
        'location',
        'female_count',
        'male_count'
    ];
    
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

     public function media()
    {
        return $this->morphMany(Media::class, 'mediable');
    }
 
}
