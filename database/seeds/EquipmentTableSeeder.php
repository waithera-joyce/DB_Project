<?php

use Illuminate\Database\Seeder;

class EquipmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          \DB::table('equipment')->delete();  
        \DB::table('equipment')->insert(array (
            0 => array(
            'id'=>1,
            'serial_no'=>100001,
            'name'=>'laptop',
            'purchase_date'=>'1/10/2010',
            'status'=>'unavailable'
            ),
             1 => array(
            'id'=>2,
            'serial_no'=>200002,
            'name'=>'desktop',
            'purchase_date'=>'1/10/2010',
            'status'=>'unavailable'
            ),
             2 => array(
            'id'=>3,
            'serial_no'=>300003,
            'name'=>'mobile phone',
            'purchase_date'=>'1/10/2010',
            'status'=>'unavailable'
            ),
             3 => array(
            'id'=>4,
            'serial_no'=>400004,
            'name'=>'coffee maker',
            'purchase_date'=>'1/10/2010',
            'status'=>'unavailable'
            ),
             4 => array(
            'id'=>5,
            'serial_no'=>500005,
            'name'=>'kettle',
            'purchase_date'=>'1/10/2010',
            'status'=>'unavailable'
            ),
             5 => array(
            'id'=>6,
            'serial_no'=>600006,
            'name'=>'stapler',
            'purchase_date'=>'1/10/2010',
            'status'=>'unavailable'
            ),
             6 => array(
            'id'=>7,
            'serial_no'=>800008,
            'name'=>'laptop',
            'purchase_date'=>'1/10/2010',
            'status'=>'unavailable'
            ),
             7 => array(
            'id'=>8,
            'serial_no'=>800008,
            'name'=>'mobile phone',
            'purchase_date'=>'1/10/2010',
            'status'=>'unavailable'
            ),
             8 => array(
            'id'=>9,
            'serial_no'=>900009,
            'name'=>'laptop',
            'purchase_date'=>'1/10/2010',
            'status'=>'available'
            ),
             9=> array(
            'id'=>10,
            'serial_no'=>110011,
            'name'=>'stapler',
            'purchase_date'=>'1/10/2010',
            'status'=>'available'
            ),
             ));
    }
}
