<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
     {
         Schema::create('clientorder', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned();
            $table->integer('service_id')->unsigned();
            $table->date('order_date');
            $table->date('deliver_date');
            //$table->timestamp();
            $table->foreign('client_id')->references('id')->on('client'); 
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
        Schema::dropIfExists('clientorder');
    }
}
