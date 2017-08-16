<?php

use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('service')->delete();
        
        \DB::table('service')->insert(array (
         0 => array(
         	'id'=>1,
            'client_id'=>1,
            'dpt_id'=>1,
            'name'=>'network_configuration'
            ), 
         1 => array(
            'id'=>2,
            'client_id'=>2,
            'dpt_id'=>2,
            'name'=>'website_development'
            ), 
          2 => array(
            'id'=>3,
            'client_id'=>3,
            'dpt_id'=>3,
            'name'=>'mobile_applications'
            ), 
           3 => array(
            'id'=>4,
            'client_id'=>4,
            'dpt_id'=>4,
            'name'=>'portals'
            ), 
            4=> array(
            'id'=>5,
            'client_id'=>5,
            'dpt_id'=>1,
            'name'=>'internet_installation'
            ), 
         ));

    }
}
