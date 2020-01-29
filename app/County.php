<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
   protected $table = 'county';
   protected  $fillable = ['name','state'];

   public function state(){
       return $this->hasMany('App\State','state','id');
   }
}
