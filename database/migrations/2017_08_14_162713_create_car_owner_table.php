<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarOwnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_owner', function (Blueprint $table) {
             $table->increments('owner_Id');
             $table->integer('car_id')->unsigned();
             $table->integer('employee_id')->unsigned();
             $table->date('issue_date');
             $table->date('submit_date');
            // $table->timestamp();
             $table->foreign('employee_id')->references('id')->on('employee'); 
             $table->foreign('car_id')->references('id')->on('car');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_owner');  
    }
}
