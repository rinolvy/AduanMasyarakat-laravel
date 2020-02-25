<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Report;
use Faker\Generator as Faker;

$factory->define(Report::class, function (Faker $faker) {
    return [
        'nik' => $faker->sentence,
        'namalengkap' => $faker->sentence,
        'isilaporan' => $faker->paragraph(15),
    ];
});
