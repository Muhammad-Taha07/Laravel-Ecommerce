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
        // $this->call(UsersTableSeeder::class);
        $execute = [
            $this->call(CategorySeeder::class, BrandSeeder::class, ProductSeeder::class
        )];
        return $execute;
    }
}
