<?php

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
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'admin@test.com',
            'city' =>'DC',
            'mobile' => '+1584 158 1156',
            'password' => '$2y$10$9YhxZ4yG0/fRkOktQlLtU.OlXu1/aZ5iovGeGlnKCWNUqlITNdOQ2',
            'permission' => '1',

        ]);
    }
}
