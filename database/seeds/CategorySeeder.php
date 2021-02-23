<?php

use App\Category;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i=0; $i < 10; $i++) { 
            # code...
            $newCategory = new Category();
            $newCategory->genre = $faker->word();
            $newCategory->over_18 = $faker->boolean();
            $newCategory->save();
        }
    }
}
