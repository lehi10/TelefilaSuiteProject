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
Route::get('nuevo-usuario', function(){
    return view('/super_user/nuevo-usuario');
});
