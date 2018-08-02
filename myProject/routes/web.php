<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function (){
	return 'Home';
});

Route::get('/usuarios', function(){
	return 'Usuarios';
});


//usuarios/nuevo != usuarios/[0-9]+
Route::get('/usuarios/{id}', function($id){
	return "Mostrando detalle del usuario: {$id}";
})->where('id','[0-9]+');

//Creating Users
Route::get('/usuarios/nuevo', function(){
	return 'Creando nuevo usuario';
});
