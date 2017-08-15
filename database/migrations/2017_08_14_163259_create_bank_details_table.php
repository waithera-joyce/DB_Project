<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
   {
         Schema::create('bankdetails', function(Blueprint $table) {
            $table->integer('bank_id')->unsigned();
            $table->integer('employee_id')->unsigned();
            $table->integer('account_no');
            //$table->timestamp();
            $table->foreign('bank_id')->references('id')->on('bank'); 
            $table->foreign('employee_id')->references('id')->on('employee');       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropIfExists('bankdetails');
    }
}