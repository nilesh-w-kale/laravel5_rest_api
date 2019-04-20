<?php

use Faker\Generator as Faker;
use App\Model\Company;

$factory->define(App\Model\Employee::class, function (Faker $faker) {
    return [
        
        'company_id' => function() {
        	return Company::all()->random();
        },
        'name' => $faker->name,
        'address' => $faker->address
    ];
});
