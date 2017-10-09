<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 5; $i++) {
            $firstName = $faker->firstName;
            $lastName = $faker->lastName;
            DB::table('users')->insert([
                'id' => ($i + 1),
                'first_name' => $firstName,
                'last_name' => $lastName,
                'email' => strtolower("{$firstName}@example.com")
            ]);
        }
    }
}
