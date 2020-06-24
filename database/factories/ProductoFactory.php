<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'marca' => $faker->word,
        'modelo' => $faker->word,
        'serie' => $faker->word,
        'cantidad' => $faker->randomDigitNotNull,
        'fecha_ingreso' => $faker->word,
        'categoria_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
