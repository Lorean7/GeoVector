<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'shot_name',
        'full_name',
        'shot_desc',
        'title',
        'desc',
        'keywords',
        'material',
        'voltag',
        'power',
        'interface',
        'protokol',
        'main_img',
        'small_img',
        'gabarit_img',
        'functions',
        'title_gallery',
        'tth',
        'publish',
        'alias',
        'gabarit_big_img'
    ];
}
