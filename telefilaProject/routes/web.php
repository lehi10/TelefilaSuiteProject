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
Route::get('superUsuario/nuevoUsuario', 'SuperUsuarioController@nuevoUsuario' );
Route::get('superUsuario/cliente', 'SuperUsuarioController@cliente' );

Route::post('superUsuario/store','SuperUsuarioController@store');



/* llamadas para  interfaces de usuarios*/

Route::get('admision', function(){
    return view('/usuario/Admision');
});
    
Route::get('agenda', function(){
    return view('/usuario/agenda');
});
Route::get('login', function(){
    return view('/usuario/login');
});

/*llamadas para interfaces de pacientes */
Route::get('main_paciente', function(){
    return view('/paciente/main_paciente');
});

Route::get('index_paciente', function(){
    return view('/paciente/index');
});
Route::get('especialidad', function(){
    return view('/paciente/especialidad');
});
Route::get('fecha', function(){
    return view('/paciente/fecha');
});
Route::get('imprime', function(){
    return view('/paciente/imprime');
});
Route::get('imprimiendo', function(){
    return view('/paciente/imprimiendo');
});
/* llamadas para  interfaces de agenda*/

Route::get('admision', function(){
    return view('/agenda/Admision');
});

Route::get('agenda', function(){
    return view('/agenda/agenda');
});
Route::get('login', function(){
    return view('/agenda/login');
});

