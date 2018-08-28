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

        $professions = DB::select('SELECT id FROM professions WHERE title = "Desarrollador Back-end"');

        DB::table('users')->insert([
        	'name' 	=> 'Klvst3r IO',
        	'email'	=> 'klvst3r@gmail.com',
        	'password' => bcrypt('laravel'), 
        	 
        ]);
    }
}
