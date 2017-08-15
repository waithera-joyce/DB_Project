<?php

use Illuminate\Database\Seeder;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   {
          \DB::table('car')->delete();
        
        \DB::table('car')->insert(array (
            0 => array(
            'id'=>1,
            'No_plate'=>'KBT OO1A',
            'model'=>'BMW',
            'purchase_date'=>'1/10/2010',
            'status'=>'unavailable'
            ),
             1 => array(
            'id'=>2,
            'No_plate'=>'KBT OO2A',
            'model'=>'BMW',
            'purchase_date'=>'1/10/2010',
            'status'=>'unavailable'
            ),
             2 => array(
            'id'=>3,
            'No_plate'=>'KBT OO3A',
            'model'=>'vw',
            'purchase_date'=>'1/12/2010',
            'status'=>'unavailable'
            ),
             3 => array(
            'id'=>4,
            'No_plate'=>'KBT OO4A',
            'model'=>'VW',
            'purchase_date'=>'1/12/2010',
            'status'=>'unavailable'
            ),
             4 => array(
            'id'=>5,
            'No_plate'=>'KBT OO5A',
            'model'=>'TOYOTA',
            'purchase_date'=>'1/08/2010',
            'status'=>'unavailable'
            ),
             5 => array(
            'id'=>6,
            'No_plate'=>'KBT OO6A',
            'model'=>'TOYOTA',
            'purchase_date'=>'1/08/2010',
            'status'=>'unavailable'
            ),
             6 => array(
            'id'=>7,
            'No_plate'=>'KBT OO7A',
            'model'=>'AUDI',
            'purchase_date'=>'1/06/2010',
            'status'=>'unavailable'
            ),
             7 => array(
            'id'=>8,
            'No_plate'=>'KBT OO8A',
            'model'=>'AUDI',
            'purchase_date'=>'1/06/2010',
            'status'=>'unavailable'
            ),
             8 => array(
            'id'=>9,
            'No_plate'=>'KBT OO9A',
            'model'=>'BMW',
            'purchase_date'=>'1/05/2010',
            'status'=>'available'
            ),
             9 => array(
            'id'=>10,
            'No_plate'=>'KBT O10A',
            'model'=>'BMW',
            'purchase_date'=>'1/05/2010',
            'status'=>'available'
            ),
             ));
    }
}
