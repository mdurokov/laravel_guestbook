<?php

use Faker\Generator as Faker;

$factory->define(App\Signature::class, function (Faker $faker) {
    return [
        'name' 		=>	$faker->name,
        'email' 	=>	$faker->SafeEmail,
        'body'		=>	$faker->sentence
    ];
});
