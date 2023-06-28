<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['member_name', 'designation', 'member_info', 'image', 'fb_url', 'twitter_url', 'insta_url', 'linkedin_url'];

}
