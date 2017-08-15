<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    protected $fillable =['id','name','serial_no'];

     public function employee() {
     	return $this->belongsTo(employee::class, 'dpt_id');
     }

     public function equipment_owner() {
     	return $this->hasOne(equipment_owner::class, 'serial_no');
     }
}
