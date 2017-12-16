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
        factory(\App\User::class)->create([
            'name' => 'Admin User',
            'email' => 'admin@dynamarine.gr',
            'password' => bcrypt(123456),
            'remember_token' => str_random(10),
        ]);
    }
}
