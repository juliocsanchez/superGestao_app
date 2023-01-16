<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SiteContact;
use Faker\Generator as Faker;

$factory->define(SiteContact::class, function (Faker $faker) {
    return [
        'nome' => $faker-> name,
        'email' => $faker-> email,
        'telefone' => $faker-> unique()->tollFreephoneNumber,
        'motivo_contato' => $faker->numberBetween(1,3),
        'mensagem' =>$faker -> text(150)
    ];
});
