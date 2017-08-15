<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client_order extends Model
{
    protected $fillable =['id','client_id','service_id','order_date','deliver_date'];

      public function client() {
     	return $this->hasMany(client::class, 'client_id');
     }
      public function service() {
     	return $this->hasMany(service::class, 'service_id');
}
}
