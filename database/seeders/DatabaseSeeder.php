<?php

namespace Database\Seeders;

use Database\Seeders\UserSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\CommentSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            PostSeeder::class,
            CommentSeeder::class
        ]);
    }
}
