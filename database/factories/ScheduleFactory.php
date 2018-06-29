<?php

use Faker\Generator as Faker;

$factory->define(App\Schedule::class, function (Faker $faker) {
    return [
        'scheduleDate' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'scheduleTime' => $faker->time($format = 'H:i:s', $max = 'now'),
        'patientID' => App\Patient::inRandomOrder()->first(),
        'doctorID' => App\Doctor::inRandomOrder()->first(),
    ];
});
