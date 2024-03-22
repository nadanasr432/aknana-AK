<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
     protected $fillable = ['name', 'phone', 'entity_name', 'email', 'gender', 'job_title', 'course_id','date_of_course'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
      public function media()
    {
        return $this->morphMany(Media::class, 'mediable');
    }

    public function notifications()
    {
        return $this->morphMany(Notification::class, 'notifiable');
    }
    
}
