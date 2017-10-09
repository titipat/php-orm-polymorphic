<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UsersTableSeeder');
        $this->call('StudentsTableSeeder');
        $this->call('LecturersTableSeeder');
        $this->call('GuestsTableSeeder');
        $this->call('ProjectsTableSeeder');
    }
}
