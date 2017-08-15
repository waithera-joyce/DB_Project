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
             $this->call(BankTableSeeder::class);
             $this->call(EmployeeTableSeeder::class);
             $this->call(CarTableSeeder::class);
             $this->call(CarOwnerTableSeeder::class);
             $this->call(EquipmentTableSeeder::class);
             $this->call(EquipmentOwnerTableSeeder::class);
             $this->call(RoleTableSeeder::class);
             $this->call(DepartmentTableSeeder::class);
             $this->call(SalaryTableSeeder::class);
             $this->call(ClientTableSeeder::class);
             $this->call(ServiceTableSeeder::class);
             $this->call(ClientOrderTableSeeder::class);
             $this->call(DepartmentServiceTableSeeder::class);
             $this->call(BankDetailsTableSeeder::class);
        Model::reguard();

    }
}
