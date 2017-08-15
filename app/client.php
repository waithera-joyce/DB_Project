<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    protected $fillable =['id','name','start_date','status'];

      public function clientorder() {
     	return $this->hasMany(clientorder::class, 'client_id');
}
}
