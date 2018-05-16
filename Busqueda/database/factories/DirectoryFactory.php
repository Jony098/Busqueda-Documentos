<?php

use Faker\Generator as Faker;

$factory->define(App\Directory::class, function (Faker $faker) {
    return [
        /*

$table->integer('parent_id')->unsigned(); //wtf
            $table->string('name');
            $table->integer('user_id')->unsigned(); //

        */

            'parent_id' => 1,
            'name' => $faker->name,
            'user_id' => rand(1,10),
    ];
});
