<?php

use Illuminate\Database\Seeder;

class BankDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    \DB::table('BankDetails')->delete();
        
        \DB::table('BankDetails')->insert(array (
            0 => array(
            'Employee_Id'=>1,
            'Bank_Id'=>1,
            'Account_no'=>'A100100'         
            ),
            1 => array(
            'Employee_Id'=>2,
            'Bank_Id'=>2,
            'Account_no'=>'B200200'
            ),
            2 => array(
            'Employee_Id'=>3,
            'Bank_Id'=>3,
            'Account_no'=>'C300300'
            ),
            3 => array(
            'Employee_Id'=>4,
            'Bank_Id'=>4,
            'Account_no'=>'D400400'
            ),
            4 => array(
            'Employee_Id'=>5,
            'Bank_Id'=>5,
            'Account_no'=>'E500500'
            ),
            5 => array(
            'Employee_Id'=>6,
            'Bank_Id'=>1,
            'Account_no'=>'F600600'
            ),
            6 => array(
            'Employee_Id'=>7,
            'Bank_Id'=>2,
            'Account_no'=>'G700700'
            ),
            7 => array(
            'Employee_Id'=>8,
            'Bank_Id'=>3,
            'Account_no'=>'H800800'
            ),
        ));
    }
}

