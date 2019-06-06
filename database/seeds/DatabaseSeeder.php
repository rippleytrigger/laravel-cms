<?php

use Illuminate\Database\Seeder;
use App\RoleTableSeeder;
use App\UserTableSeeder;
use App\PostTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
	    $this->call([
           RoleTableSeeder::class,
           UserTableSeeder::class,
           PostTableSeeder::class
        ]);
    }
}
