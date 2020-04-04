<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Episode;
use App\Series;
use Faker\Generator as Faker;

$factory->define(Episode::class, function (Faker $faker) {
    $series = Series::pluck('id');
    return [
        //generate random data for episodes
        'title'=>$faker->domainWord,
        'description' => $faker->realText(),
        'airing_time_day'=>$faker->dayOfWeek,
        'airing_time_hour' =>$faker->time(),
        'series_id' => $faker->randomElement($series),
    ];
});
