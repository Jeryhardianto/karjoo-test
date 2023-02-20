<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AnnualLeave;
use Faker\Generator as Faker;

$factory->define(AnnualLeave::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'start_date' => $faker->date(),
        'end_date' => $faker->date(),
        'reason' => $faker->text(100)
    ];
});
