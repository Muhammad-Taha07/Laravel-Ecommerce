<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'     => 'Muhammad Taha',
            'email'    => 'm.taha164@yopmail.com',
            'password' => Hash::make('12345678')
        ],
        [
            'name'     => 'User Test Account',
            'email'    => 'trello@yopmail.com',
            'password' => Hash::make('abc123')
        ]);
    }
}
