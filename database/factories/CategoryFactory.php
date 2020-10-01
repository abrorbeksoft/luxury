<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        "title"=>"Man",
        "alias"=>$faker->text(120),
        "parent_id"=>1,
        "keywords"=>"Man",
        "description"=>"Man"
    ];
});
