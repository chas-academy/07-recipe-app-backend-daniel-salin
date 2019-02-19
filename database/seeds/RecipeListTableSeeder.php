<?php

use Illuminate\Database\Seeder;

class RecipeListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\RecipeList::class, 5)->create();
    }
}
