<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\kegiatan;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\kegiatan::class, function (Faker $faker) {
    $judul = $faker->sentence;
    return [
        'slug' => Str::slug($judul),
        'judul' => $judul,
        'tgl'=> now(),
        'deskripsi' => $faker->sentence(100),
        'foto_kegiatan' =>$faker->imageUrl($width = 200, $height = 200),
        'status' => 0
    ];
});
