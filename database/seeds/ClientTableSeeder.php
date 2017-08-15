<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
          \DB::table('client')->delete();
        
        \DB::table('client')->insert(array (
            0 => array(
            	'id'=>1,
                'name' =>'PWC',
                'start_date'=>'1/03/2011', 
                'status' =>'active'
                ),
            1 => array(
            	'id'=>2,
                'name' =>'ILRI',
                'start_date'=>'1/03/2011', 
                'status' =>'active'
                ),
            2 => array(
            	'id'=>3,
                'name' =>'KPMG',
                'start_date'=>'1/03/2011', 
                'status' =>'active'
                ),
            3 => array(
            	'id'=>4,
                'name' =>'CIP',
                'start_date'=>'1/03/2011',
                'status' =>'active'
                ),
            4 => array(
            	'id'=>5,
                'name' =>'PBC',
                'start_date'=>'1/03/2011',
                'status' =>'active'
                ),
            ));
    }
}
