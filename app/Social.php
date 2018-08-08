<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $table = "social";

     protected $fillable = [
        'icon', 'link','user_id'
    ];
     public function conversations(){
    	return $this->hasOne('App\User','id');
	}
}
