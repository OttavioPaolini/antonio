<?php

namespace Database\Seeders;

use App\Models\Pornostar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PornostarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $pornoStar = new Pornostar();
            $pornoStar->name = $faker->name();
            $pornoStar->hair = $faker->randomElement(['blonde', 'brown', 'red']);
            $pornoStar->birth_date = $faker->date();
            $pornoStar->save();
        }
    }
}
