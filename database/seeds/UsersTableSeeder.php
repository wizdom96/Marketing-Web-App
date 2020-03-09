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
        DB::table('users')->delete();

        $users=array(
            array(
                'id'=> 1,
                'name'=>'Admin',
                'email'=>'admin@example.com',         //creating USER
                'city'=>'Prilep',
                'mobile'=>'075111222',
                'password'=>Hash::make('password'),
                'permission'=>'1'
            ),

            array(
                'id'=> 2,
                'name'=>'User',
                'email'=>'user@example.com',         //creating USER
                'city'=>'Skopje',
                'mobile'=>'075888999',
                'password'=>Hash::make('password'),
                'permission'=>'0'
            )

            );
            DB::table('users')->insert($users);
        }
}
