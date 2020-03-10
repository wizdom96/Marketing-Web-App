<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagesUpload extends Model
{
    protected $table='images_uploads';
    protected $fillable=['id','image_name','content_id'];
}
