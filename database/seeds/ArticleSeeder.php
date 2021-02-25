<?php

use App\Article;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ArticleSeeder extends Seeder
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
            $newArticle = new Article();
            $newArticle->title = $faker->sentence();
            $newArticle->subtitle = $faker->sentence();
            $newArticle->body = $faker->paragraph(10);
            $newArticle->author = $faker->name();
            $newArticle->save();
        }
    }
}
