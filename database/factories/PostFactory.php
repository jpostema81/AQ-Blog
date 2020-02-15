<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'slug' => $faker->slug,
        'short_desc' => $faker->text(250),
        'long_desc' => $faker->text(2000),
        'author_id' => User::all()->random(1)->first()->id,
        'created_at' => $faker->dateTimeThisYear,
        'updated_at' => null
    ];
});
