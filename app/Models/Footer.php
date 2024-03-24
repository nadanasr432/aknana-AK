<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Footer extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['text', 'location'];
    protected $table = 'footer';

    protected $fillable = ['phone', 'email', 'text', 'location'];
}
