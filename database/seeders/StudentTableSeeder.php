<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name' => 'Kiss Balazs',
            'email'=> 'kisbalazs@gmail.com',
        ]);
        DB::table('students')->insert([
            'name' => 'Nagy Peter',
            'email'=> 'nagypeter@gmail.com',
        ]);
    }
}
