<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    protected $table = "conversation";

     protected $fillable = [
        'title', 'image','readed','desc','desc2','imagestyle','type','poster_id','jstyle','hstyle','created_at'
    ];
    public function poster(){
    	return $this->belongsTo('App\User', 'poster_id');
    }
     public function comments(){
        return $this->hasMany('App\Comment','con_id');
    }
}
