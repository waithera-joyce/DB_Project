<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function(Blueprint $table){
            $table->increments('id');
            $table->string('Name',50);
           //$table->integer('Dpt_Id')->unsigned();
            $table->date('Start_date');
            $table->date('Stop_date');
            $table->string('Address',12);
            //$table->enum ('Gender',array ('Female','Male'));
            $table->integer('Age');
            $table->string('Phone_no',12);
            //$table->timestamp();
           // $table->foreign('dpt_id')->references('id')->on('department');       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('employee');
    }
}
