<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About_image extends Model
{
    protected $table = "about_images";

     protected $fillable = [
        'image'
    ];
}
