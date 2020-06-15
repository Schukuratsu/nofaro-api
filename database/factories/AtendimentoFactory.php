<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Atendimento;
use Faker\Generator as Faker;

$factory->define(Atendimento::class, function (Faker $faker) {
    return [
        'data' => $faker->date(),
        'descricao' => $faker->sentence(9, true),
        'pet_id' => $faker->numberBetween(1, 50)
    ];
});
