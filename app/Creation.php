<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creation extends Model
{
    protected $table = "creations";

     protected $fillable = [
        'name'
    ];
}
