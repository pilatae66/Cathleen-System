<?php

use Faker\Generator as Faker;

$factory->define(App\HealthRecord::class, function (Faker $faker) {
    return [
        'diagnosis' => $faker->sentence($nbWords = 10, $variableNbWords = true),
        'treatment' => $faker->sentence($nbWords = 10, $variableNbWords = true),
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'patientID' => App\Patient::inRandomOrder()->first()->id,
        'doctorID' => App\Doctor::inRandomOrder()->first()->id,
    ];
});
