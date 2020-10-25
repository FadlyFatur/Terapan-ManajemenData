<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\beranda;
use Faker\Generator as Faker;

$factory->define(beranda::class, function (Faker $faker) {
    return [
        'kontak' => $faker->tollFreePhoneNumber,
        'email'=> $faker->email,
        'alamat'=> $faker->address,
        'gambar1'=> $faker->imageUrl($width = 200, $height = 200),
        'gambar2'=> $faker->imageUrl($width = 200, $height = 200),
        'gambar3'=> $faker->imageUrl($width = 200, $height = 200),
        'status'=> 0
    ];
});
