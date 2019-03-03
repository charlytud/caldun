<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->paragraph,
        'price' => $faker->numberBetween(100,10000),
        'stock'=> $faker->randomDigit,
        'discount' => $faker->numberBetween(50,300),
        'user_id' => function(){
        	return App\User::all()->random();
        },
    ];
});
