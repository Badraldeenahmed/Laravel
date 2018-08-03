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
    	];

    	//$users = User::all();
    	return view('users', [
    		'users' => $users
		]);

    }

    public function show($id){
    	return "Mostrando detalle del usuario: {$id}";
    }

    public function create(){
    	return 'Crear nuevo usuario';
    }

}