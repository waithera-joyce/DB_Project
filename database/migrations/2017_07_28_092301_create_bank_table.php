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
        Schema::create('bank', function(Blueprint $table) {
            $table->increments('Bank_Id');
            $table->integer('Employee_Id');
            $table->string('Account_no');
            $table->char('Name');
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
