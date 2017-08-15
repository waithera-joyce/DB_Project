<?php

use Illuminate\Database\Seeder;

class ClientOrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
          \DB::table('clientorder')->delete();
        
        \DB::table('clientorder')->insert(array (
            0 => array(
            'id'=>1,
            'client_id'=>1,
            'service_id'=>1,
            'order_date'=>'1/1/2011',
            'deliver_date'=>'1/4/2011'
            ),
            1 => array(
            'id'=>2,
            'client_id'=>2,
            'service_id'=>2,
            'order_date'=>'1/2/2011',
             'deliver_date'=>'1/5/2011'
            ),
            2 => array(
            'id'=>3,
            'client_id'=>3,
            'service_id'=>3,
            'order_date'=>'1/3/2011',
            'deliver_date'=>'1/6/2011'
            ),
            3 => array(
            'id'=>4,
            'client_id'=>5,
            'service_id'=>5,
            'order_date'=>'1/5/2011',
            'deliver_date'=>'1/8/2011'
            ),
            4 => array(
            'id'=>5,
            'client_id'=>1,
            'service_id'=>5,
            'order_date'=>'1/6/2011',
            'deliver_date'=>'1/9/2011'
            ),
             5 => array(
            'id'=>6,
            'client_id'=>2,
            'service_id'=>1,
            'order_date'=>'1/8/2011',
            'deliver_date'=>'1/11/2011'
            ),
             6 => array(
            'id'=>7,
            'client_id'=>3,
            'service_id'=>2,
            'order_date'=>'1/9/2011',
            'deliver_date'=>'1/12/2011'
            ),
             7 => array(
            'id'=>8,
            'client_id'=>4,
            'service_id'=>3,
            'order_date'=>'1/9/2011',
            'deliver_date'=>'1/12/2011'
            ),
             8 => array(
            'id'=>9,
            'client_id'=>5,
            'service_id'=>4,
            'order_date'=>'1/10/2011',
            'deliver_date'=>'1/1/2012'
            ),
        ));
    }

}

