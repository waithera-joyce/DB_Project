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
             $table->increments('Owner_Id');
             $table->integer('Serial_no');
             $table->integer('Employee_Id');
             $table->date('Issue_date');
             $table->date('Submit_date');
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
