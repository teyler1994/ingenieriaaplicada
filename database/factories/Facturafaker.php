<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Factura;
use Faker\Generator as Faker;

$factory->define(App\Models\Factura::class, function (Faker $faker) {
    return [
        'fecha_factura' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'medio_pago' => $faker->name,
        'observaciones' => $faker->name,
        'Cod_Cliente' => rand(1,3),
        'Cod_Vendedor' => function() {
        	return factory(App\Models\Vendedor::class)->create()->id;
        }
    ];
});
