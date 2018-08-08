<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comment";

     protected $fillable = [
        'name', 'content','con_id'
    ];

    public function conversations(){
    	return $this->hasOne('App\Conversation','id');
	}
}
