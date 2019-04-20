<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Company::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'detail' => $faker->paragraph,
    ];
});
