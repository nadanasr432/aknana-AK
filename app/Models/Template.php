<?php

namespace App\Models;

use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Template extends Model
{
    use HasTranslations;

    protected $fillable = [
        'name',
        'main_title',
        'main_sub_title',
        'main_text',
        'button_text',
        'items',
        'image',
        'image_ar'
    ];

    public $translatable = [
        'main_title',
        'main_sub_title',
        'main_text',
        'button_text',
        'items',
        'name'
    ];


    /**
     * Get the service that owns the template.
     */
  
}
