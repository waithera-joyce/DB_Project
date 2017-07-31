<?php

use Illuminate\Database\Seeder;

class EquipmentOwnerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('equipment_owner')->delete();
        
        \DB::table('equipment_owner')->insert(array (
         0 => array(
            'Owner_Id'=>1,
            'Employee_Id'=>1,
            'Serial_no'=>100001,
            'Issue_date'=>'1/1/2010',
            'Submit_date'=>'1/1/2040'
            ),
         1 => array(
            'Owner_Id'=>2,
            'Employee_Id'=>2,
            'No_plate'=>200002,
            'Issue_date'=>'1/2/2010',
            'Submit_date'=>'1/2/2040'
            ),
            2 => array(
            'Owner_Id'=>3,
            'Employee_Id'=>3,
            'No_plate'=>300003,
            'Issue_date'=>'1/3/2010',
            'Submit_date'=>'1/3/2040'
            ),
            3 => array(
            'Owner_Id'=>4,
            'Dpt_Id'=>1,
            'No_plate'=>400004,
            'Issue_date'=>'1/4/2011',
            'Submit_date'=>'1/4/2040'
            ),
            4 => array(
            'Owner_Id'=>5,
            'Employee_Id'=>4,
            'No_plate'=>500005,
            'Issue_date'=>'1/05/2010',
            'Submit_date'=>'1/05/2040'
            ),
            5 => array(
            'Owner_Id'=>6,
            'Employee_Id'=>5,
            'No_plate'=>600006,
            'Issue_date'=>'6/6//2010',
            'Submit_date'=>'6/6/2040'
            ),
            6 => array(
            'Owner_Id'=>7,
            'Employee_Id'=>6,
            'No_plate'=>700007,
            'Issue_date'=>'1/7/2010',
            'Submit_date'=>'1/7/2040'
            ),
            7 => array(
            'Owner_Id'=>8,
            'Employee_Id'=>7,
            'No_plate'=>800008,
            'Issue_date'=>'1/8/2010',
            'Submit_date'=>'1/8/2040'
            ),
             ));    
    }
}
