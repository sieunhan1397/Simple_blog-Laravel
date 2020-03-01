<?php

use App\Article;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        $limit = 10;

        for ($i=0; $i < $limit; $i++) { 
            # code...
            Article::create([
                'title'     =>  $faker->sentence,
                // 'content'   =>  implode('', $faker->sentences(4))
                'content'   => $faker->text
            ]);
        }
    }
}
