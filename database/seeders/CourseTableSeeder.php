<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'name' => 'Web programozás',
            'description'=> 'Web programozás',
        ]);
        DB::table('courses')->insert([
            'name' => 'Adatbázis rendszerek',
            'description'=> 'Adatbázis rendszerek',
        ]);
        DB::table('courses')->insert([
            'name' => 'Mobileszközök és alkalmazások',
            'description'=> 'Mobileszközök és alkalmazások',
        ]);

        DB::table('courses')->insert([
            'name' => 'Mikróökonómia',
            'description'=> 'Mikróökonómia',
        ]);
    }
}
