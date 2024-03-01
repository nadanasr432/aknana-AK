<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
     protected $fillable = ['name', 'phone', 'entity_name', 'email', 'gender', 'job_title', 'course_id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
