<?php

namespace Database\Seeders;

use App\Models\Project;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for($i = 0; $i < 16; $i++) {

            $newProject = new Project();
            $newProject->name = $faker->sentence(4);
            $newProject->client = $faker->word();
            $newProject->year = $faker->numberBetween(2022, 2026);
            $newProject->description = $faker->paragraph(4);
            $newProject->save();
        }
        
    }
}
