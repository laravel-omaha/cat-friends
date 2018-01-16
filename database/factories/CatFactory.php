<?php

use App\Cat;
use App\Cat\Breed;

$factory->define(Cat::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'age' => rand(1, 16),
        'bio' => $faker->paragraph,
        'image' => 'cat' . rand(1, 6) . '.jpg',
        'breed_id' => Breed::all()->random()->id,
    ];
});
