<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class equipment extends Model
{
    protected $fillable =['id','serial_no','name','purchase_date','status'];

     public function ewuipment_owner() {
          return $this->hasMany(equipment_owner::class, 'id');
     }   
}
