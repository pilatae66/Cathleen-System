<?php

use Faker\Generator as Faker;

$factory->define(App\Patient::class, function (Faker $faker) {
    return [
        'firstName' => $faker->firstName,
        'middleName' => $faker->firstName,
        'lastName' => $faker->lastName,
        'gender' => $faker->randomElement($array = array ('Male','Female'), $count = 1),
        'contactNumber' => $faker->e164PhoneNumber,
        'address' => $faker->address,
        'staffID' => App\Staff::inRandomOrder()->first()->id,
    ];
});
