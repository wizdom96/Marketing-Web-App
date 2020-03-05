<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postadd extends Model
{
    protected $table = 'content';
    protected $fillable = [
        'make', 'model', 'title', 'description', 'phone', 'year', 'city', 'price', 'transmission', 'fuel', 'km', 'type', 'image', 
    ];

    
}
