<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\products;
use Faker\Generator as Faker;

$factory->define(products::class, function (Faker $faker) {
    return [
        'Nombre'=>$faker->unique()->name,
        'Descripcion'=>$faker->text,
        'Precio'=>$faker->postcode
    ];
});
