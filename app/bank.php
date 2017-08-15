<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bank extends Model
{
   protected $fillable =['id','name'];

     public function employee(){
     	return $this->hasmany(employee::class, 'id');
     }
}
