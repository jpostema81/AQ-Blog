<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Role;
use App\User;
use App\UserRole;
use Faker\Generator as Faker;

$factory->define(UserRole::class, static function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'role_id' => Role::all()->random()->id
    ];
});
