<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(EquipmentOwnerTableSeeder::class);
        $this->call(DepartmentTableSeeder::class);
        $this->call(CarOwnwerTableSeeder::class);
        $this->call(SalaryTableSeeder::class);
        $this->call(BankTableSeeder::class);
        $this->call(EmployeeTableSeeder::class);
        Model::reguard();
    }
}
