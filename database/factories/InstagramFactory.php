<?php

use Faker\Generator as Faker;

$factory->define(App\Instagram::class, function (Faker $faker) {
    return [
        'pic' => $faker->imageUrl(100, 100, 'cats'),
    ];
});
