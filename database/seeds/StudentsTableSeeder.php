<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'id' => '580610612',
            'user_id' => 1
        ]);
        DB::table('students')->insert([
            'id' => '580610613',
            'user_id' => 2
        ]);
    }
}
