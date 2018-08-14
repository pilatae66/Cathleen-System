<?php

use Faker\Generator as Faker;

$factory->define(App\Admin::class, function (Faker $faker) {
    return [
        'firstname' => 'ADMIN',
        'lastname' => 'ADMIN',
        'username' => 'admin',
        'password' => 'admin',
    ];
});
