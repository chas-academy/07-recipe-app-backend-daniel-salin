<?php

use Faker\Generator as Faker;

$factory->define(App\RecipeList::class, function (Faker $faker) {
    $recipes = (
        [
            "title" => "Bananas",
            "id" => "jdhs8u979"
        ]
        );
    return [
            'title' => $faker->sentence($nbWords = 3, $variableNbWords = true),
            'recipes' => $recipes,
            'user_id' => function () {
                return factory(App\User::class)->create()->id;
            }
        ];
});
