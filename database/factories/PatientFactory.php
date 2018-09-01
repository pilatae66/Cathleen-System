<?php

use Faker\Generator as Faker;

$factory->define(App\Patient::class, function (Faker $faker) {
    return [
        'arrival' => $faker->firstName,
        'disposition' => $faker->firstName,
        'firstName' => $faker->firstName,
        'middleName' => $faker->firstName,
        'lastName' => $faker->lastName,
        'birthDate' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'gender' => $faker->randomElement($array = array ('Male','Female'), $count = 1),
        'civilStatus' => $faker->randomElement($array = array ('Single','Married','Divorced','Widow'), $count = 1),
        'contactNumber' => $faker->e164PhoneNumber,
        'address' => $faker->address,
        'rr' => $faker->numberBetween($min = 10, $max = 100),
        'wt' => $faker->numberBetween($min = 10, $max = 100),
        'ht' => $faker->numberBetween($min = 10, $max = 100),
        'bp' => $faker->numberBetween($min = 10, $max = 100),
        'temp' => $faker->numberBetween($min = 10, $max = 100),
        'age' => $faker->numberBetween($min = 10, $max = 80),
        'staffID' => App\Staff::inRandomOrder()->first()->id,
        'docID' => App\Doctor::inRandomOrder()->first()->id,
    ];
});
