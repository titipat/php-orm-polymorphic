<?php

use Illuminate\Database\Seeder;

class LecturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lecturers')->insert([
            'id' => 1,
            'user_id' => 3
        ]);
        DB::table('lecturers')->insert([
            'id' => 2,
            'user_id' => 4
        ]);
    }
}
