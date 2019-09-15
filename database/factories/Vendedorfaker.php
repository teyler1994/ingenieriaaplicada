<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Vendedor;
use Faker\Generator as Faker;


$factory->define(App\Models\Vendedor::class, function (Faker $faker) {
    return [
        'antiguedad_vendedor' => $faker->randomDigit,

        'especificaciones'=>[
          "nombre_especificaciones" => $faker->name,
          "tipo_especificacion" => $faker->mimeType,
          "extension" => $faker->fileExtension


        ],
       
    ];
});
