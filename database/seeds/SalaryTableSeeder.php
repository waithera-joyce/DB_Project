<?php

use Illuminate\Database\Seeder;

class SalaryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	\DB::table('salary')->delete();
        
        \DB::table('Salary')->insert(array (
         0 => array(
            'Account_no'=>'A100100s',
            'Employee_Id'=>1,
            'Amount'=>'100000.00',
            'date'=>'1/9/2011'
            ), 
         1 => array(
            'Account_no'=>'B200200',
            'Employee_Id'=>2,
            'Amount'=>'120000.00',
            'date'=>'1/9/2011'
            ), 
         2 => array(
            'Account_no'=>'C300300',
            'Employee_Id'=>3,
            'Amount'=>'100000.00',
            'date'=>'1/9/2011'
            ), 
         3 => array(
            'Account_no'=>'D400400',
            'Employee_Id'=>4,
            'Amount'=>'90000.00',
            'date'=>'1/9/2011'
            ), 
         4 => array(
            'Account_no'=>'E500500',
            'Employee_Id'=>5,
            'Amount'=>'100000.00',
            'date'=>'1/9/2011'
            ), 
         5 => array(
            'Account_no'=>'A600600',
            'Employee_Id'=>6,
            'Amount'=>'100000.00',
            'date'=>'1/9/2011'
            ), 
         6 => array(
            'Account_no'=>'B700700',
            'Employee_Id'=>7,
            'Amount'=>'80000.00',
            'date'=>'1/9/2011'
            ), 
         7 => array(
            'Account_no'=>'C800800',
            'Employee_Id'=>8,
            'Amount'=>'150000.00',
            'date'=>'1/9/2011'
            ), 
         ));
    }
}
