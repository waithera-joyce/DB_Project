<?php
use Illuminate\Support\Facades\Schema;
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
            $table->increments('Employee_Id');
            $table->char('Name');
            $table->integer('Dpt_Id');
            $table->string('Account_no');
            $table->integer('Serial_no');
            $table->string('No_plate');
            $table->date('Start_date');
            $table->date('Stop_date');
            $table->string('Address');
            $table->boolean('Gender');
            $table->integer('Age');
            $table->string('Phone_no');
            $table->timestamps();
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
