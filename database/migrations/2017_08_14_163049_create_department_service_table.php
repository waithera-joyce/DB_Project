<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('departmentservice', function(Blueprint $table) {
            $table->integer('dpt_id')->unsigned();
            $table->integer('service_id')->unsigned();
            $table->date('start_date');
            $table->date('deadline');
            //$table->timestamp();
            $table->foreign('dpt_id')->references('id')->on('department'); 
            $table->foreign('service_id')->references('id')->on('service');  
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('departmentservice');
    }
}
