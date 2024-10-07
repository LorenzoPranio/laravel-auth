<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\Project;

use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10;  $i++){
            $project = new Project();
            $project->name = $faker->sentence(3);
            $project->summary = $faker->paragraph(3, true);

            $project->slug = Str::slug($project->name, '-');

            $project->save();
    }
}
}