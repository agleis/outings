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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'profile_picture' => 'img/default-user-image.png',
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Trip::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->sentence,
        'group_id' => $faker->numberBetween(1, 3),
        'description' => $faker->paragraph,
        'num_people' => $faker->numberBetween(2, 10),
        'location' => $faker->address,
        'start' => $faker->date,
        'end' => $faker->date
    ];
});

$factory->define(App\Group::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->sentence,
        'admin' => $faker->numberBetween(1, 3),
        'founder' => $faker->numberBetween(1, 3),
        'description' => $faker->paragraph,
        'picture' => $faker->url
    ];
});
