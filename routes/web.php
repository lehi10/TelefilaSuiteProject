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

/* llamadas para  interfaces de super_user*/

Route::get('', function(){
    return view('index');
});



Route::get('superUsuario', 'SuperUsuarioController@index' );
Route::get('superUsuario/nuevoCliente', 'SuperUsuarioController@nuevoCliente' );
//Route::get('superUsuario/nuevoUsuario', 'SuperUsuarioController@nuevoUsuario' );
Route::get('superUsuario/{idCliente}/nuevoUsuario', 'SuperUsuarioController@nuevoUsuario' );
Route::get('superUsuario/cliente/{idCliente}', 'SuperUsuarioController@cliente');
Route::get('superUsuario/listaClientes', 'SuperUsuarioController@listarClientes' );
Route::get('superUsuario/listaUsuarios', 'SuperUsuarioController@listarUsuarios' );



Route::post('superUsuario/store','SuperUsuarioController@store');
Route::post('superUsuario/storeUsuario','SuperUsuarioController@storeUsuario');


// Modulo de Administración
Route::get('{idCliente}/', 'AdministracionController@index' );
Route::get('{idCliente}/administracion', 'AdministracionController@index' );
Route::get('{idCliente}/administracion/nuevoUsuario', 'AdministracionController@nuevoUsuario' );
Route::get('{idCliente}/administracion/editarUsuario/{idUsuario}', ['uses'=>'AdministracionController@editarUsuario'] );


