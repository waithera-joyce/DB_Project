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
            'Employee_Id'=>1,
            'Name'=>'Joyce Waithera',
            'Dpt_Id'=> 2, 
            'Account_no' =>'A100100',
            'Serial_no'=>100001,
            'No_plate'=>'KBT 001A',
            'Start_date'=>'01/01/2010',
            'Stop_date'=>'01/01/2040',
            'Address'=>'100 peponi',
            'Gender'=>'Female',
            'Age'=>20,
            'Phone_no'=>'+254711100100'
            ),
            1 => array(
            'Employee_Id'=> 2,
            'Name'=>'Justa Kinya',
            'Dpt_Id'=>2,
            'Account_no'=>'B200200',
            'Serial_no'=>200002,
            'No_plate'=>'KBT 002A',
            'Start_date'=>'01/02/2010',
            'Stop_date'=>'01/02/2040',
            'Address'=>'10 Wangige',
            'Gender'=>'Female',
            'Age'=>24,
            'Phone_no'=>'+254711200200'
            ),
             2=> array(
            'Employee_Id'=> 3,
            'Name'=>'Absolom Kihara',
            'Dpt_Id'=>3,
            'Account_no'=>'C300300',
            'Serial_no'=>300003,
            'No_plate'=>'KBT 003A',
            'Start_date'=>'01/03/2010',
            'Stop_date'=>'01/03/2040',
            'Address'=>'300Rwaka',
            'Gender'=>'Male',
            'Age'=>34,
            'Phone_no'=>'+254711300300'
            ),
            3 => array(
            'Employee_Id'=> 4,
            'Name'=>'Gideon Kamau',
            'Dpt_Id'=>4,
            'Account_no'=>'D400400',
            'Serial_no'=>400004,
            'No_plate'=>'KBT 004A',
            'Start_date'=>'01/05/2010',
            'Stop_date'=>'01/05/2040',
            'Address'=>'20South B',
            'Gender'=>'Male',
            'Age'=>25,
            'Phone_no'=>'+254711400400'
            ),
            4 => array(
            'Employee_Id'=>5,
            'Name'=>'Edga Wandati',
            'Dpt_Id'=>4,
            'Account_no'=>'E500500',
            'Serial_no'=>500005,
            'No_plate'=>'KBT 005A',
            'Start_date'=>'01/02/2010',
            'Stop_date'=>'01/02/2040',
            'Address'=>'10Wangige',
            'Gender'=>'Female',
            'Age'=>24,
            'Phone_no'=>'+254711500500'
            ),
            5 => array(
            'Employee_Id'=> 6,
            'Name'=>'Deng',
            'Dpt_Id'=>3,
            'Account_no'=>'A600600',
            'Serial_no'=>600006,
            'No_plate'=>'KBT 006A',
            'Start_date'=>'01/06/2010',
            'Stop_date'=>'01/07/2040',
            'Address'=>'50Mwamto',
            'Gender'=>'Male',
            'Age'=>28,
            'Phone_no'=>'+2547600600'
            ),
            6 => array(
            'Employee_Id'=> 7,
            'Name'=>'Elizabeth kihoi',
            'Dpt_Id'=>2,
            'Account_no'=>'B700700',
            'Serial_no'=>700007,
            'No_plate'=>'KBT 007A',
            'Start_date'=>'01/02/2010',
            'Stop_date'=>'01/02/2040',
            'Address'=>'20Wangige',
            'Gender'=>'Female',
            'Age'=>24,
            'Phone_no'=>'+254711700700'
            ),
            7 => array(
            'Employee_Id'=> 8,
            'Name'=>'Wanjiku Nganga',
            'Dpt_Id'=> 1,
            'Account_no'=>'C800800',
            'Serial_no'=>800008,
            'No_plate'=>'KBT 008A',
            'Start_date'=>'01/07/2010',
            'Stop_date'=> '01/07/2040',
            'Address'=>'300Peponi',
            'Gender'=>'Female',
            'Age'=>35,
            'Phone_no'=>'+254711800800'
            ),

        ));
       
    }
}
