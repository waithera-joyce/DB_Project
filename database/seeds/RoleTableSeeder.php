<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('Role')->delete();
        
        \DB::table('Role')->insert(array (
            0 => array(
            'id'=>1,
            'name'=>'one',
            'start_date'=>'1/2/2012', 
            'stop_date'=>'7/2/2012'        
            ),
             1 => array(
            'id'=>2,
            'name'=>'two',
            'start_date'=>'1/2/2012', 
            'stop_date'=>'7/2/2012'        
            ),
             2 => array(
            'id'=>3,
            'name'=>'three',
            'start_date'=>'1/2/2012', 
            'stop_date'=>'7/2/2012'        
            ),
             3 => array(
            'id'=>4,
            'name'=>'four',
            'start_date'=>'1/2/2012', 
            'stop_date'=>'7/2/2012'        
            ),
             ));
    }
}
