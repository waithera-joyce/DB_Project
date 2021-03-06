<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class equipment_owner extends Model
{
     protected $fillable =['owner_id','equipment_id','employee_Id','issue_date','submit_date'];

    public function department() {
     	return $this->hasOne(department::class, 'Dpt_id');
     }
     public function employee()
     {
     	return $this->hasOne(employee::class,'Account_no');
     }
}
