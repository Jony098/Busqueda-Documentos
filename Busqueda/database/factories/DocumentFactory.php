<?php

use Faker\Generator as Faker;

$factory->define(App\Document::class, function (Faker $faker) {
    return [
       


            'title' => $faker->sentence(4),
            'description' => $faker->text(200),
            'author_id' => rand(1,80),
            'user_id' => rand(1,10),
    ];
});
