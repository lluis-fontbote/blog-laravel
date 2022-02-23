<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        $faker = Factory::create('ca-ES');

        User::create([
            'name' => 'lluis',
            'email' => 'lluis.fontbote@insbaixcamp.cat',
            'email_verified_at' => now(),
            'is_admin' => true,
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10)
        ]);

        for ($i = 0;  $i < 15;  $i++) {
            User::create([
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'email_verified_at' => now(),
                'is_admin' => true,
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10)
            ]);
        }
    }
}
