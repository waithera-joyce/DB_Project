<?php

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   {
       \DB::table('employee')->delete();
        
        \DB::table('employee')->insert(array (
            0 => array(
            'id'=>1,
            'Name'=>'Joyce Waithera',             
            'Start_date'=>'01/01/2010',
            'Stop_date'=>'01/01/2040',
            'Address'=>'100 peponi',
            //'Gender'=>'Female',
            'Age'=>20,
            'Phone_no'=>'+254711100100'
            ),
            1 => array(
            'id'=> 2,
            'Name'=>'Justa Kinya',
            'Start_date'=>'01/02/2010',
            'Stop_date'=>'01/02/2040',
            'Address'=>'10 Wangige',
            //'Gender'=>'Female',
            'Age'=>24,
            'Phone_no'=>'+254711200200'
            ),
             2=> array(
            'id'=> 3,
            'Name'=>'Absolom Kihara',
            'Start_date'=>'01/03/2010',
            'Stop_date'=>'01/03/2040',
            'Address'=>'300Rwaka',
            //'Gender'=>'Male',
            'Age'=>34,
            'Phone_no'=>'+254711300300'
            ),
            3 => array(
            'id'=> 4,
            'Name'=>'Gideon Kamau',           
            'Start_date'=>'01/05/2010',
            'Stop_date'=>'01/05/2040',
            'Address'=>'20South B',
            //'Gender'=>'Male',
            'Age'=>25,
            'Phone_no'=>'+254711400400'
            ),
            4 => array(
            'id'=>5,
            'Name'=>'Edga Wandati',            
            'Start_date'=>'01/02/2010',
            'Stop_date'=>'01/02/2040',
            'Address'=>'10Wangige',
            //'Gender'=>'Female',
            'Age'=>24,
            'Phone_no'=>'+254711500500'
            ),
            5 => array(
            'id'=> 6,
            'Name'=>'Deng',            
            'Start_date'=>'01/06/2010',
            'Stop_date'=>'01/07/2040',
            'Address'=>'50Mwamto',
            //'Gender'=>'Male',
            'Age'=>28,
            'Phone_no'=>'+2547600600'
            ),
            6 => array(
            'id'=> 7,
            'Name'=>'Elizabeth kihoi',           
            'Start_date'=>'01/02/2010',
            'Stop_date'=>'01/02/2040',
            'Address'=>'20Wangige',
            //'Gender'=>'Female',
            'Age'=>24,
            'Phone_no'=>'+254711700700'
            ),
            7 => array(
            'id'=> 8,
            'Name'=>'Wanjiku Nganga',            
            'Start_date'=>'01/07/2010',
            'Stop_date'=> '01/07/2040',
            'Address'=>'300Peponi',
            //'Gender'=>'Female',
            'Age'=>35,
            'Phone_no'=>'+254711800800'
            ),

        ));
       
    }
}

