<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('es_CA');

        $posts = Post::all();
        $users = User::inRandomOrder()->limit(rand(6, 20));

        foreach ($posts as $post) {
            foreach ($users as $user) {
                for ($i = 0;  $i < 15;  $i++) {
                    Comment::create([
                        'text' => $faker->sentence(rand(6, 20)),
                        'author_id' =>  $user->id,
                        'post_id' => $post->id
                    ]);
                }
            }
        }
    }
}
