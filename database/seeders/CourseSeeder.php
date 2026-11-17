<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Course::create(
            [
                "name" => "Web Development",
                "description"=> "Belajar tentang web menggunakan laravel",
                "sks"=> 4,
                "capacity" => 50,
                "class"=> "508"
            ]
        );

       Course::create(
            [
                "name" => "Visual Programming",
                "description"=> "Belajar mengenai pemrograman secara visual menggunakan kotlin",
                "sks"=> 3,
                "capacity" => 60,
                "class"=> "505a"
            ]
        );

        Course::create(
            [
                "name" => "Ethics",
                "description"=> "Belajar mengenai ethics",
                "sks"=> 2,
                "capacity" => 60,
                "class"=> "505a"
            ]
        );
    }
}
