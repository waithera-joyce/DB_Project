<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $fillable =['role_id','name','start_date','stop_date'];

     public function departmet() {
          return $this->hasOne(department::class, 'dpt_Id');
     }
}
