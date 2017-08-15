<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class salary extends Model
{
     protected $fillable =['id','Account_no','Employee_Id','Amount','date'];
     public function employee() {
          return $this->hasMany(employee::class, 'Employee_Id');
      }
}
