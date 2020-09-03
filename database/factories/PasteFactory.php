<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(post::class, function (Faker $faker) {
        $date = $faker->dateTimeBetween('-1 month','-1 day');
        $url = Str::random('8');
    return [
        'name'=>$faker->realText('10','4'),
        'slug'=>$faker->slug('3','4'),
        'author_id'=>rand(1,10),
        'href'=> $url,
        'created_at'=> $date,

        'updated_at'=> $date,
    ];
});
