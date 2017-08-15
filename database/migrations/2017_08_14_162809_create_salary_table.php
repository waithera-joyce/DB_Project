<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary', function (Blueprint $table) {
             $table->increments('id');
             $table->string('account_no',12);
             $table->integer('employee_Id')->unsigned();
             $table->integer('amount');
             $table->date('date');
             //$table->timestamp();
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
         Schema::dropIfExists('salary');     }
}
