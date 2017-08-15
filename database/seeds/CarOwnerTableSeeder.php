<?php

use Illuminate\Database\Seeder;

class CarOwnerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   {
          \DB::table('car_owner')->delete();
        
        \DB::table('car_owner')->insert(array (
            0 => array(
            'owner_id'=>1,
            'car_id'=>1,	
            'Employee_Id'=>1,
            'Issue_date'=>'1/12/2010',
            'Submit_date'=>'1/12/2011'
            ),
            1 => array(
            'owner_id'=>2,
            'car_id'=>2,
            'Employee_Id'=>2,
            'Issue_date'=>'1/12/2010',
            'Submit_date'=>'1/12/2011'
            ),
            2 => array(
            'owner_id'=>3,
            'car_id'=>3,
            'Employee_Id'=>3,
            'Issue_date'=>'1/12/2010',
            'Submit_date'=>'1/12/2011'
            ),
            3 => array(
            'owner_id'=>4,
            'car_id'=>4,
            'Employee_Id'=>4,
            'Issue_date'=>'1/2/2011',
            'Submit_date'=>'1/2/2012'
            ),
            4 => array(
            'owner_id'=>5,
            'car_id'=>5,
            'Employee_Id'=>5,
            'Issue_date'=>'1/3/2010',
            'Submit_date'=>'1/3/2011'
            ),
            5 => array(
            'owner_id'=>6,
            'car_id'=>6,
            'Employee_Id'=>6,
            'Issue_date'=>'1/3/2010',
            'Submit_date'=>'1/3/2011'
            ),
            6 => array(
            'owner_id'=>7,
            'car_id'=>7,
            'Employee_Id'=>7,
            'Issue_date'=>'1/3/2010',
            'Submit_date'=>'1/3/2011'
            ),
            7 => array(
            'owner_id'=>8,
            'car_id'=>8,
            'Employee_Id'=>8,
            'Issue_date'=>'1/3/2010',
            'Submit_date'=>'1/3/2011'
            ),      
             ));
    }
}
