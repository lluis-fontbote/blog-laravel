<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('es_CA');

        $categories = Category::all();

        foreach ($categories as $category) {
            for ($i = 0;  $i < 15;  $i++) {
                Post::create([
                    'title' => $faker->words(3, true),
                    'content' => $faker->text,
                    'author_id' => User::inRandomOrder()->first()->id,
                    'category_id' => $category->id
                ]);
            }
        }
        
    }
}
