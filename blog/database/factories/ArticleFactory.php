<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
      'text'=>$faker->text,
      'short_text'=>$faker->text,
      'author_name'=>$faker->name,
    ];
});
