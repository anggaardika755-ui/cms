<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    protected $fillable = [
        'title', 
        'subtitle', 
        'image_path', 
        'button_text_1', 
        'button_text_2'
    ];
}