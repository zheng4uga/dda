<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AvailableCounty extends Model
{
    protected $fillable = ['county'];

    public function county(){
        return $this->hasMany('App\County','county','id');
    }
}
