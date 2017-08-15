<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class department_service extends Model
{
     protected $fillable =['dpt_Id','service_id','order_date','deadline'];

     public function department() {
          return $this->hasMany(department::class, 'dpt_Id');
     }

     public function service() {
          return $this->hasMany(service::class, 'service_id');
     }
}
