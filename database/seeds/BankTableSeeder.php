<?php

use Illuminate\Database\Seeder;

class BankTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
 \DB::table('Bank')->delete();
        
        \DB::table('Bank')->insert(array (
            0 => array(
            'Bank_Id'=>1,
            'Employee_Id'=>1,
            'Account_no'=>'A100100',
            'Name'=>'Barclays'
            ),
            1 => array(
            'Bank_Id'=>2,
            'Employee_Id'=>2,
            'Account_no'=>'B200200',
            'Name'=>'Cooperative'
            ),
            2 => array(
            'Bank_Id'=>3,
            'Employee_Id'=>3,
            'Account_no'=>'C300300',
            'Name'=>'Equity'
            ),
            3 => array(
            'Bank_Id'=>4,
            'Employee_Id'=>4,
            'Account_no'=>'D400400',
            'Name'=>'KCB'
            ),
             4 => array(
            'Bank_Id'=>5,
            'Employee_Id'=>5,
            'Account_no'=>'E500500',
            'Name'=>'Family Bank'
            ),
));
            }
}
