<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car_owner extends Model
{
    protected $fillable =['owner_id','car_id','employee_id','issue_date','submit_date'];

      public function employee() {
     	return $this->hasOne(employee::class, 'employee_id');
     }
}
