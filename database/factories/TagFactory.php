<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tag;
use Faker\Generator as Faker;

$factory->define(Tag::class, static function (Faker $faker) {
    return [
        'name' => $faker->word
    ];
});
