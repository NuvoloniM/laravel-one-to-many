<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // rendo fillable le chiavi
    protected $fillable= [
        'title', 'content', 'image', 'slug'
    ];
}
