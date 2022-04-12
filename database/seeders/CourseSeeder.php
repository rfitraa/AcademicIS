<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = [
            [
                'course_name' => 'Basic Programming',
                'sks' => 3,
                'hour' => 6,
                'semester' => 4
            ],
            [
                'course_name' => 'Advanced Web Programming',
                'sks' => 3,
                'hour' => 6,
                'semester' => 4
            ],
            [
                'course_name' => 'Advanced Database',
                'sks' => 3,
                'hour' => 6,
                'semester' => 4
            ],
            [
                'course_name' => 'Software Engineering',
                'sks' => 3,
                'hour' => 6,
                'semester' => 4
            ],
        ];

        DB::table('course')->insert($course);
    }
}
