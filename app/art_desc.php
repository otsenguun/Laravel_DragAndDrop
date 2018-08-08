<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class art_desc extends Model
{
    protected $table = "art_descs";

     protected $fillable = [
        'desc', 'art_id'
    ];

    public function conversations(){
    	return $this->hasOne('App\art','id');
	}

}
