<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Vendedor;
use Faker\Generator as Faker;


$factory->define(App\Models\Vendedor::class, function (Faker $faker) {
    return [
        'antiguedad_vendedor' => $faker->randomDigit,
       
    ];
});
