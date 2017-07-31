<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

// $factory->define(App\Employee::class, function (Faker\Generator $faker) {
//     return [
//         'Employee_Id' => $faker->Employee_Id,
//         'Name' => $faker->Name,
//         'Dpt_Id' => $faker->Dpt_Id,
//         'Account_no' => $faker->Account_no,
//         'Serial_no' => $faker->Serial_no,
//         'No_plate' => $faker->No_plate,
//         'Start_date' => $faker->Start_date,
//         'Stop_date' => $faker->Stop_date,
//         'Address' => $faker->Address,
//         'Gender' => $faker->Gender,
//         'Age' => $faker->Age,
//         'Phone_no' => $faker->Phone_no,
//     ];
// });
