<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('Car', function(Blueprint $table){
            $table->increments('id');
            $table->string('no_plate',8);
            $table->string('model',12);
            $table->date('purchase_date');
            $table->enum('status',array ('available','unavailable'));
            //$table->timestamp();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car');  
    }
}

