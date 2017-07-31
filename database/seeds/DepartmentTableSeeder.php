<?php

use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \DB::table('Department')->delete();
        
        \DB::table('Department')->insert(array (
         0 => array(
            'Dpt_Id'=>1,
            'Name'=>'Information Technology',
            'Serial_no'=>900009,
            ), 
         1 => array(
            'Dpt_Id'=>2,
            'Name'=>'Finance',
            'Serial_no'=>900009,
            ), 
         2 => array(
            'Dpt_Id'=>3,
            'Name'=>'Marketting',
            'Serial_no'=>110003,
            ), 
         3 => array(
            'Dpt_Id'=>4,
            'Name'=>'Communications',
            'Serial_no'=>220001,
            ), 

       ));
                }
}
