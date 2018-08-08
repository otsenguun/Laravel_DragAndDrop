<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class art extends Model
{
    protected $table = "arts";

     protected $fillable = [
        'text', 'image','position'
    ];
     public function descs(){
        return $this->hasMany('App\art_desc','art_id');
    }
}
