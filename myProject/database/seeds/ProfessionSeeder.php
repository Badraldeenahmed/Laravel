<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //DB::insert('INSERT INTO professions (title ) VALUES ("Desarrollador Back-End")');
        
        //DB::insert('INSERT INTO professions (title ) VALUES (?)', ['Desarrollador back-end']);

        DB::table('professions')->insert([
        	'title' => 'Desarrollador Back-end',
        ]);

        DB::table('professions')->insert([
        	'title' => 'Desarrollador Front-end',
        ]);

        DB::table('professions')->insert([
        	'title' => 'Diseñador Web',
        ]);
    }
}
