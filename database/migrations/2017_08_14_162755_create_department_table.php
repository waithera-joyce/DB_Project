<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department', function(Blueprint $table){
            $table->increments('id');
            $table->string('Name',50);
            $table->integer('equipment_id')->unsigned();
            $table->integer('role_id')->unsigned();
            //$table->timestamp();
            $table->foreign('equipment_id')->references('id')->on('equipment');
            $table->foreign('role_id')->references('id')->on('role');       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         dropIfExists('department');    

    }
}

