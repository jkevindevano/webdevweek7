<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lecturer;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lecturer::create(
            [
                "name" => "Jonathan Kevin Devano",
                "email" => "jkevin@gmail.com",
                "isActive"=> true,
                "faculty" => "SIFT",
                
            ]
        );
         Lecturer::create(
            [
                "name" => "Ezekiel Reuben Kandoko",
                "email" => "ereuben@gmail.com",
                "isActive"=> true,
                "faculty" => "SIFT",
                
            ]
        );
         Lecturer::create(
            [
                "name" => "Christian Raharjo",
                "email" => "craharjo@gmail.com",
                "isActive"=> false,
                "faculty" => "SIFT",
                
            ]
        );
         Lecturer::create(
            [
                "name" => "Steven Sirait",
                "email" => "ssirait@gmail.com",
                "isActive"=> true,
                "faculty" => "SIFT",
                
            ]
        );
    }
}
