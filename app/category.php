<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ['title'];

    public function posts()
   {
   	return $this->hasMany('App\Post');
   	}////
}
