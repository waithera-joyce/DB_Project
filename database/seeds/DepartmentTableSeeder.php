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
            'id'=>1,
            'Name'=>'Information Technology',
            'equipment_id'=>1,
            'role_id'=>1
            ), 
         1 => array(
            'id'=>2,
            'Name'=>'Finance',
            'equipment_id'=>2,
            'role_id'=>2
            ), 
         2 => array(
            'id'=>3,
            'Name'=>'Marketting',
            'equipment_id'=>3,
            'role_id'=>3
            ), 
         3 => array(
            'id'=>4,
            'Name'=>'Communications',
            'equipment_id'=>4,
            'role_id'=>4
            ), 
       ));
                }
}
