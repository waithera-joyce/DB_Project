<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
         Schema::create('role', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name',20);
            //$table->integer('dpt_id');
            $table->date('start_date');
            $table->date('stop_date');
            //$table->timestamp();
            //$table->foreign('dpt_id')->references('id')->on('department'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role');
    }
}