<?php
// app/Models/Company.php
// app/Models/Company.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Company extends Authenticatable
{
    use HasApiTokens, HasFactory;

    protected $fillable = [
        'name',
        'email',
        'address',
        'type_of_company',
        'phone',
        'password',
        'serial_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function certificate()
    {
        return $this->belongsTo(Certificate::class, 'serial_id', 'certificate_No');
    }

    public function media()
    {
        return $this->morphMany(Media::class, 'mediable');
    }
}
