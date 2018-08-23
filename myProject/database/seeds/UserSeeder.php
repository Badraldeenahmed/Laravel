<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        	'name' 	=> 'Klvst3r IO',
        	'email'	=> 'klvst3r@gmail.com',
        	'password' => bcrypt('laravel'), 
        	 
        ]);
    }
}
