<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   protected $fillable = ['NAMA','NOKP','NO_TEL_PELAJAR','EMAIL'];
   
   public function category()
   {
   	return $this->belongsTo('App\category');
   	}//
}
