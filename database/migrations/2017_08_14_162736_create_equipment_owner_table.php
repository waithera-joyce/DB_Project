<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentOwnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment_owner', function (Blueprint $table) {
             $table->increments('owner_Id');
             $table->integer('equipment_id')->unsigned();
             $table->integer('employee_Id')->unsigned();
             $table->date('issue_date');
             $table->date('submit_date');
             //$table->timestamp();
             $table->foreign('equipment_id')->references('id')->on('equipment'); 
             $table->foreign('employee_Id')->references('id')->on('employee'); 
        });
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        dropIfExists('equipment_owner');
    }
}
