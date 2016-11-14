<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Entities\User::class, function (Faker\Generator $faker) {
    return [
        'name'      => $faker->name,
        'nickname'  => $faker->userName,
        'role'      => 'owner',
        'email'     => $faker->safeEmail,
        'password'  => bcrypt('parqueo'),
        'remember_token' => str_random(20),
    ];
});

$factory->define(App\Entities\Parking::class, function (Faker\Generator $faker) {
    return [
        'location'  => $faker->streetAddress,
        'latitude'  => $faker->latitude,
        'longitude' => $faker->longitude,
        'state'     => true,
    ];
});

$factory->define(App\Entities\Owner::class, function (Faker\Generator $faker) {
    return [
        'name'      => $faker-> name,
        'type'      => 'public',
    ];
});