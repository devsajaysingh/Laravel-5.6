<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    class DatabaseSeeder extends Seeder
	{
	    public function run()
	    {
	        $this->call(ArticlesTableSeeder::class);
	        $this->call(UsersTableSeeder::class);
	    }
	}
}
