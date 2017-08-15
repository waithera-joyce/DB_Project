<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    
    protected $fillable =['id','Name','Start_date','Stop_date','Phone_no','Address','Age'];


    public function department()
    {
    	return $this->belongsTo(department::class, 'dpt_Id');
    }
    public function equipment_owner()
    {
    	return $this->hasMany(equipment_owner::class,'serial_no');
    }
    public function car_owner()
    {
    	return $this->hasMany(car_owner::class,'no_plate');
    }
    public function bank()
    {
    	return $this->hasMany(bank::class'bank_id');
    }
}
