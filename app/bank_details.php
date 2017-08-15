<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bank_details extends Model
{
    protected $fillable =['employee_id','bank_id','account_no'];

     public function employee(){
     	return $this->hasmany(employee::class, 'employee_id');
     }
     public function bank(){
     	return$this->hasmany(bank::class, 'bank_id');
     }
}
