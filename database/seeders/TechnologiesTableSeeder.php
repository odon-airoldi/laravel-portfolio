<?php

namespace Database\Seeders;

use App\Models\Technology;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $technologies = ['HTML', 'JavaScript', 'React', 'PHP', 'Laravel'];

        foreach ($technologies as $technology) {
            $newTechnology = new Technology();
            $newTechnology->name = $technology;
            $newTechnology->description = $faker->sentence(16);
            $newTechnology->save();
        }
    }
}
