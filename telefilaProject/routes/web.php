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
Route::get('main', function(){
    return view('main');
});
Route::get('index', function(){
    return view('/super_user/index');
});

Route::get('cliente', function(){
    return view('/super_user/cliente');
});
Route::get('nuevo_cliente', function(){
    return view('/super_user/nuevo_cliente');
});
Route::get('nuevo_usuario', function(){
    return view('/super_user/nuevo-usuario');
});

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