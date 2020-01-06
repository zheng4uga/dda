<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zipcode extends Model
{
    protected $table = 'zipcode';

    protected $fillable = ['zipcode','county'];

    public function county(){
        return $this->hasMany('App\County','county','id');
    }
}
