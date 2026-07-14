<?php

namespace Database\Seeders;

use App\Models\Type;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // $types = ['HTML', 'JavaScript', 'React', 'Express', 'PHP', 'Laravel'];
        $types = ['Landing page', 'Web site', 'E-commerce', 'Web app'];

        foreach ($types as $type) {
            $newType = new Type();
            $newType->name = $type;
            $newType->description = $faker->sentence(16);
            $newType->save();
        }
    }
}
