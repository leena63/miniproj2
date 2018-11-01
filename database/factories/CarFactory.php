<?php

use Faker\Generator as Faker;

$factory->define(\App\Car::class, function (Faker $faker) {
    return [
        'Year' => $faker->year('2018'),
        'Model' => $faker->name(),
        'Make' => $faker->randomElement($array = array ('Honda', 'Toyota', 'Ford')),
    ];
});
