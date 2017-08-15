<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
     protected $fillable =['id','no_plate','model','purchase date','status'];

     public function car_owner(){
     	return $this->hasMany(car_owner::class, 'id');
     }
}
