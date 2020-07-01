<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Answer;
use Faker\Generator as Faker;

$factory->define(Answer::class, function (Faker $faker) {
    return [
        # TODO: Ensure this is wont invalidate the minimum 5 character length limit.
        'answer' => $faker->sentence()
    ];
});
