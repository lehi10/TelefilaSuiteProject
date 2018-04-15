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

