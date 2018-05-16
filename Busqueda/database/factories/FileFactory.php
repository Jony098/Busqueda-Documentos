<?php

use Faker\Generator as Faker;

$factory->define(App\File::class, function (Faker $faker) {
    return [
        
'url'  => $faker->url,
'directory_id' => rand(1,80),
'document_id' => rand(1,100),
'mime' => $faker->mimeType,
'size' => rand(1,99999),





    ];
});
