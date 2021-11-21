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
            'gender' => 1,
        ]);
        DB::table('students')->insert([
            'name' => 'Nagy Peter',
            'email'=> 'nagypeter@gmail.com',
            'gender' => 1,
        ]);
        DB::table('students')->insert([
            'name' => 'Egy Anna',
            'email'=> 'anna@gmail.com',
            'gender' => 0,
        ]);
        DB::table('students')->insert([
            'name' => 'Ket Ilona',
            'email'=> 'ili@gmail.com',
            'gender' => 0,
        ]);
    }
}
