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
        'symptoms' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'staffID' => App\Staff::inRandomOrder()->first()->id,
        'docID' => App\Doctor::inRandomOrder()->first()->id,
    ];
});
