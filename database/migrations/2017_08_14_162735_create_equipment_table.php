<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
   {
         Schema::create('Equipment', function(Blueprint $table){
            $table->increments('id');
            $table->string('serial_no',8);
            $table->string('name',12);
            $table->date('purchase_date');
            $table->enum('status',array ('available','unavailable'));
           // $table->timestamp();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Equipment'); 
    }
}