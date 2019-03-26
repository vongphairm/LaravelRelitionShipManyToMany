<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'created_at'=>$faker->sentence(),
        'updated_at'=>$faker->sentence()

    ];
});
