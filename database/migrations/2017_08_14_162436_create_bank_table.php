<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create ('bank', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('employee_id')->unsigned();
            //$table->integer('salary_id')->unsigned();
            $table->string('name',50);
            //$table->timestamp();
           // $table->foreign('employee_id')->references('id')->on('employee'); 
            //$table->foreign('salary_id')->references('id')->on('salary'); 
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         dropIfExists('bank');
    }
}
