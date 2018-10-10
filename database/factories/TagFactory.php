<?php

use Faker\Generator as Faker;

$factory->define(App\Tag::class, function (Faker $faker) {
    return [
        'name'=>$faker->text($maxNbChars=100),
        'slug'=>$faker->slug()
    ];
});
