<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

    	
    	$users = [
    		'Klvst3r',
		    'Joel',
		    'Ellie',
		    'Tess',
    		'Tommy',
    		'Bill',
    		'<script>alert("Clicker")</script>'
    	];

    	$title = 'Listado de usuarios';

    	//$users = User::all();
    	/*return view('users', [
    		'users' => $users
		]);*/
		/*return view('users')
		    ->with('users', $users)
		    ->with('title', 'Listado de Usuarios');*/
		
		//Similar tu publish vith var_dump, print asociative array
		/*var_dump(compact('title', 'users'));
		die();*/

		//helper de LAravel dd
		//dd(compact('title', 'users'));

		//convert in asociative array
		return view('users', compact('users', 'title'));

    }

    public function show($id){
    	return "Mostrando detalle del usuario: {$id}";
    }

    public function create(){
    	return 'Crear nuevo usuario';
    }

}