<?php

use Illuminate\Database\Seeder;

class CarOwnwerTableSeeder extends Seeder
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
            'Employee_Id'=>1,
            'No_plate'=>'KBT OO1A',
            'Issue_date'=>'1/12/2010',
            'Submit_date'=>'1/12/2011'
            ),
            1 => array(
            'Employee_Id'=>2,
            'No_plate'=>'KBT 002A',
            'Issue_date'=>'1/12/2010',
            'Submit_date'=>'1/12/2011'
            ),
            2 => array(
            'Employee_Id'=>3,
            'No_plate'=>'KBT 003A',
            'Issue_date'=>'1/12/2010',
            'Submit_date'=>'1/12/2011'
            ),
            3 => array(
            'Employee_Id'=>4,
            'No_plate'=>'KBT 004A',
            'Issue_date'=>'1/2/2011',
            'Submit_date'=>'1/2/2012'
            ),
            4 => array(
            'Employee_Id'=>5,
            'No_plate'=>'KBT 005A',
            'Issue_date'=>'1/3/2010',
            'Submit_date'=>'1/3/2011'
            ),
            5 => array(
            'Employee_Id'=>6,
            'No_plate'=>'KBT 006A',
            'Issue_date'=>'1/3/2010',
            'Submit_date'=>'1/3/2011'
            ),
            
             ));
    }
}
