<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $table = "conversation";

     protected $fillable = [
        'name', 'parent'
    ];
}
