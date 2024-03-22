<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $fillable = ['file_path','type'];

    public function mediable()
    {
        return $this->morphTo();
    }

     public function service()
    {
        return $this->morphTo('mediable');
    }

     public function project()
    {
        return $this->morphTo('mediable');
    }
}
