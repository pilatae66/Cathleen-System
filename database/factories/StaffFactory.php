<?php

use Faker\Generator as Faker;

$factory->define(App\Staff::class, function (Faker $faker) {
    return [
        'staffFname' => $faker->firstName,
        'staffLname' => $faker->lastName,
        'position' => $faker->jobTitle,
        'gender' => $faker->randomElement($array = array ('Male','Female'), $count = 1),
        'contactNumber' => $faker->e164PhoneNumber,
        'address' => $faker->address,
        'username' => $faker->userName,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret,
        'remember_token' => str_random(10),
    ];
});
