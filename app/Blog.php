<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table='blog';

   	protected $fillable=['user_id', 'blog_title', 'category_id', 'comment_id', 'photo', 'desc'];

   	function user()
   	{
   		return $this->belongsTo('App\Admin');
   	}   	
   	
	function category(){
   		return $this->belongsTo('App\Category');
	}
}
