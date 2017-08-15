<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    protected $fillable =['id','name','client_id','dpt_id'];

     public function client() {
          return $this->hasMany(client::class, 'client_id');
     }

     public function department() {
          return $this->belongsto(department::class, 'dpt_id');
     }
}
