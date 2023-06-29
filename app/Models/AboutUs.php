<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'description', 'image', 'first_title', 'first_content', 'second_title', 'second_content', 'third_title', 'third_content', 'fourth_title', 'fourth_content'
    ];

}
