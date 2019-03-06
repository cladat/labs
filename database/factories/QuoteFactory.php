<?php

use Faker\Generator as Faker;

$factory->define(App\Quote::class, function (Faker $faker) {
    return [
        'text' => $faker->text($maxNbChars = 400),
    ];
});
