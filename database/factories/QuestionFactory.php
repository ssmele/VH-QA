<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        # TODO: Ensure this is wont invalidate the minimum 5 character length limit.
        'question' => str_replace(".", '?', $faker->sentence())
    ];
});
