<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('es_CA');

        for ($i = 0;  $i < 15;  $i++) {
            Category::create([
                'title' => $faker->word
            ]);
        }
    }
}
