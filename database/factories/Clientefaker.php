<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cliente;
use Faker\Generator as Faker;

$factory->define(App\Models\Cliente::class, function (Faker $faker) {
    return [
        'ciudad_cliente' => $faker->name,
        'localidad_cliente' => $faker->cityPrefix,
        'edad_cliente' => $faker->randomDigit,
    ];
});
