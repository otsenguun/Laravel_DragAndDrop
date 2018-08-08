<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hours extends Model
{
    protected $table = "hours";

     protected $fillable = [
        'name'
    ];
}
