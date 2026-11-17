<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create(
            [
                "title" => "Game",
                "semester" => 1,
                "description"=> "game keren",
                "projectStart" => now(),
                "isProjectFinished"=> false
            ]
        );

        Project::factory()->count(100)->create();

    }
}
