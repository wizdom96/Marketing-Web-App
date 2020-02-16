<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addpost extends Model
{
    protected $fillable = [
        'make', 'model', 'title', 'description', 'phone', 'year', 'city', 'price', 'transmission', 'fuel', 'km', 'type', 'profile_image', 
    ];
}
