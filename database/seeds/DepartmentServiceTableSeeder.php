<?php

use Illuminate\Database\Seeder;

class DepartmentServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
     {
        
         \DB::table('departmentservice')->delete();
        
        \DB::table('departmentservice')->insert(array (
            0 => array(
            	'dpt_id'=>1,
                'service_id'=>1,
                'start_date'=>'1/1/2010',
                'deadline'=>'1/3/2010'
                ),
            1 => array(
            	'dpt_id'=>2,
                'service_id'=>2,
                'start_date'=>'1/1/2010',
                'deadline'=>'1/3/2010'
                ),
            2 => array(
            	'dpt_id'=>3,
                'service_id'=>3,
                'start_date'=>'1/2/2010',
                'deadline'=>'1/3/2010'
                ),
            3 => array(
            	'dpt_id'=>4,
                'service_id'=>4,
                'start_date'=>'1/1/2010',
                'deadline'=>'1/3/2010'
                ),
            4 => array(
            	'dpt_id'=>4,
                'service_id'=>4,
                'start_date'=>'1/1/2010',
                'deadline'=>'1/3/2010'
                ),
            5 => array(
            	'dpt_id'=>1,
                'service_id'=>5,
                'start_date'=>'1/1/2010',
                'deadline'=>'1/3/2010'
                ),
             6 => array(
            	'dpt_id'=>2,
                'service_id'=>1,
                'start_date'=>'1/1/2010',
                'deadline'=>'1/3/2010'
                ),
             7 => array(
            	'dpt_id'=>4,
                'service_id'=>2,
                'start_date'=>'1/1/2010',
                'deadline'=>'1/3/2010'
                ),
              8 => array(
            	'dpt_id'=>2,
                'service_id'=>3,
                'start_date'=>'1/1/2010',
                'deadline'=>'1/3/2010'
                ),
               9 => array(
            	'dpt_id'=>1,
                'service_id'=>4,
                'start_date'=>'1/1/2010',
                'deadline'=>'1/3/2010'
                ),
            ));

    }
}

