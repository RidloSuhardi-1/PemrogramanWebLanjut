<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'content' => $faker->realText(250),
        'image' => $faker->imageUrl(750, 300, 'cats', true),
        'writer' => $faker->sentence()
    ];
});
