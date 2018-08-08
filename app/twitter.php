<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class twitter extends Model
{
    protected $table = "twitters";

     protected $fillable = [
        'title', 'desc','show'
    ];
}
