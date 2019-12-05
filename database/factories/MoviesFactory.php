<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    // return [
    //     'title' => $faker->sentence(1,true),
    //     'director' => $faker->word(),
    //     'imageUrl' => $faker->imageUrl,
    //     'duration' => $faker->duration,
    //     'releaseDate' => $faker->releaseDate,
    //     'genre' => $faker->genre
    // ];
});


