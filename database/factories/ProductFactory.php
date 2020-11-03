<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        "title"=>"Casio MRP-700-1avef",
        "alias"=>"casio-mrp-700-1avef",
        "content"=>$faker->sentence(8),
        "price"=>$faker->numberBetween(230,600),
        "old_price"=>$faker->numberBetween(230,600),
        "status"=>"1",
        "keywords"=>$faker->sentence(7),
        "description"=>$faker->text(250),
        "img"=>"images/p-1.png",
        "hit"=>"1",
        "category_id"=>1,
        "brand_id"=>1
    ];
});
