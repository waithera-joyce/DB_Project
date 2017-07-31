<?php

use Illuminate\Database\Seeder;

class BankDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
          \DB::table('BankDetails')->delete();
        
        \DB::table('BankDetails')->insert(array (
            0 => array(
            'Employee_Id'=>1,
            'Bank_Id'=>1001,
            'Issue_date'=>'1/02/2010'
            'Submit_date'=>''
            ),
                }
}
