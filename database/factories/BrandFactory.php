<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brand;
use Faker\Generator as Faker;

$factory->define(Brand::class, function (Faker $faker) {
    return [
        "name"=>"Casio",
        "img"=>"images/abt-1.jpg",
        "alias"=>"casio",
        "description"=>$faker->sentence(7),
    ];
});
