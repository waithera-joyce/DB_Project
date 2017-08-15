<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
   {
         Schema::create('client', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name',20);
            $table->date('start_date');
            $table->enum('status',array ('active','inactive'));
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
        Schema::dropIfExists('client');
    }
}
