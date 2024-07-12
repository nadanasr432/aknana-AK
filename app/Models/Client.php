<?php
// App\Models\Client.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Authenticatable
{
    use HasApiTokens, HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'degree',
        'country',
        'serial_id', 
    ];

    protected $hidden = [
        'password',
    ];

    public function certificate()
    {
        return $this->belongsTo(Certificate::class, 'serial_id', 'certificate_No');
    }
}
