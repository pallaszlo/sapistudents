<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(ProgramTableSeeder::class);
        $this->call(CourseTableSeeder::class);
        $this->call(StudentTableSeeder::class);
        $this->call(EnrollmentTableSeeder::class);
    }
}
