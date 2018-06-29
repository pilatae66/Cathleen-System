<?php

use Faker\Generator as Faker;

$factory->define(App\Doctor::class, function (Faker $faker) {
    return [
        'doctorFname' => $faker->firstName,
        'doctorLname' => $faker->lastName,
        'contactNumber' => $faker->e164PhoneNumber,
        'address' => $faker->address,
        'username' => $faker->userName,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
