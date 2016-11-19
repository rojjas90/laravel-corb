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

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Project::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->company
    ];
});


$factory->define(App\Models\Todo::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->company,
        'description' => $faker->paragraph,
        'color' => $faker->hexcolor,
        'priority' => $faker->numberBetween($min = 1, $max = 5), // 8567
        'project_id' => $faker->numberBetween($min = 1, $max = 10), // 8567
        'user_id' => $faker->numberBetween($min = 1, $max = 4),//Auth::user()->id
    ];
});
