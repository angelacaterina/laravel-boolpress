<?php

use App\Tag;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i=0; $i < 20; $i++) { 
            # code...
            $newTag = new Tag();
            $newTag->name = $faker->word();
            $newTag->views = $faker->numberBetween();
            $newTag->topic = $faker->word();
            $newTag->save();
        }
    }
}
