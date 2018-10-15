<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'title' => $faker->unique()->title,
        'description' => $faker->text,
    ];
});
