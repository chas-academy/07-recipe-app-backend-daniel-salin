<?php

use Faker\Generator as Faker;

$factory->define(App\RecipeList::class, function (Faker $faker) {
    return [
            'title' => $faker->sentence($nbWords = 3, $variableNbWords = true),
            'recipes' => serialize($faker->words($nb = 3, $asText = false)),
            'user_id' => function () {
                return factory(App\User::class)->create()->id;
            }
        ];
});
