<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'certificate_No',
        'email',
        'trainee_Name',
        'course_Name',
        'trainer_Name',
        'country',
        'date',
        'days_No'

    ];


    // public function reservations()
    // {
    //     return $this->hasMany(Reservation::class);
    // }

    // public function media()
    // {
    //     return $this->morphMany(Media::class, 'mediable');
    // }
}
