<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = "slider";

     protected $fillable = [
        'con_id', 'image','counts'
    ];
    public function sliderConversations(){
    	return $this->belongsTo('App\Conversation','con_id');
	}
}
