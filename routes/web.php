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
Auth::routes();
//login
//Route::get('login','SuperUsuarioController@login');
//Route::post('validarLogin','SuperUsuarioController@validarLogin');

//Route::post('/index', ['as' => '/index','uses' =>'Auth\OurLoginController@login'])->name('login.submit');
//Route::post('superUsuario', 'Auth\OurLoginController@login')->name('login');
Route::post('login', 'Auth\OurLoginController@login')->name('login');
Route::get('/logout',function(){
    Auth::logout();
    return redirect("/");
});
Route::group(['middleware' => 'superUsuario'],function()
{
   
    Route::get('superUsuario', 'SuperUsuarioController@index' );
    Route::get('superUsuario/nuevoCliente', 'SuperUsuarioController@nuevoCliente' );
    Route::get('superUsuario/{idCliente}/nuevoUsuario', 'SuperUsuarioController@nuevoUsuario' );
    Route::get('superUsuario/cliente/{idCliente}', 'SuperUsuarioController@cliente');
    Route::get('superUsuario/listaClientes', 'SuperUsuarioController@listarClientes' );
    Route::get('superUsuario/listaUsuarios', 'SuperUsuarioController@listarUsuarios' );

    Route::post('superUsuario/store','SuperUsuarioController@guardarCliente');
    Route::post('superUsuario/storeUsuario','SuperUsuarioController@guardarUsuario');
});
//superuser

/** 
 * Rutas para Modulo Super Usuario
 */




/**
 * Rutas para Modulo Administración
 */


Route::get('{idCliente}/admin', 'AdministracionController@index' );
Route::get('{idCliente}/admin/nuevoUsuario', 'AdministracionController@nuevoUsuario' );
Route::get('{idCliente}/admin/editarUsuario/{idUsuario}','AdministracionController@editarUsuario' );

//Envio de Formulario
Route::post('admin/guardarUsuario','AdministracionController@guardarUsuario');
Route::post('admin/editarUsuario','AdministracionController@actualizarUsuario');
