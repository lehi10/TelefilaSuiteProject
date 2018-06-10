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
})->middleware('guest');
Auth::routes();
//login
//Route::get('login','SuperUsuarioController@login');
//Route::post('validarLogin','SuperUsuarioController@validarLogin');

//Route::post('/index', ['as' => '/index','uses' =>'Auth\OurLoginController@login'])->name('login.submit');
//Route::post('superUsuario', 'Auth\OurLoginController@login')->name('login');
// Route::post('login', 'Auth\OurLoginController@login');
Route::get('/logout',function(){
      Auth::logout();
      return redirect("/");
});

//Rutas para superUser
Route::group(['prefix'=>'superuser','middleware' => 'rol:superUser'],function()
{

    Route::get('/', 'SuperUsuarioController@index' );
    Route::get('nuevoCliente', 'SuperUsuarioController@nuevoCliente' );
    Route::get('{idCliente}/nuevoUsuario', 'SuperUsuarioController@nuevoUsuario' );
    Route::get('cliente/{idCliente}', 'SuperUsuarioController@cliente');
    Route::get('listaClientes', 'SuperUsuarioController@listarClientes' );
    Route::get('listaUsuarios', 'SuperUsuarioController@listarUsuarios' );

    Route::post('store','SuperUsuarioController@store');
    Route::post('storeUsuario','SuperUsuarioController@guardarUsuario');
});


//Rutas para administrador
Route::group(['prefix'=>'administrador','middleware' => 'rol:Administrador'],function()
{
    Route::get( 'mostrarConsultorios','AdministracionController@mostrarConsultorios');
    Route::get( 'nuevoConsultorio','AdministracionController@nuevoConsultorio');
    Route::get('/',  function() {return "Vista para administradores";} );
});


//Rutas para caja
Route::group(['prefix'=>'caja','middleware' => 'rol:Caja'],function()
{
   
    Route::get('/',  function() {return "Vista para caja";} );
});


//Rutas para admision
Route::group(['prefix'=>'admision','middleware' => 'rol:Admision'],function()
{

    Route::get('/',  function() {return "Vista para admision";} );
});

//Rutas para recursos humanos
Route::group(['prefix'=>'recursoshumanos','middleware' => 'rol:RecursosHumanos'],function()
{
   
    Route::get('/',  function() {return "Vista para recursos humanos";} );
});


Route::get('/search','SearchController@search');
/** 
 * Rutas para Modulo Super Usuario
 */




/**
 * Rutas para Modulo Administración
 */


Route::get('{idCliente}/admin', 'AdministracionController@index' );
Route::get('{idCliente}/admin/nuevoUsuario', 'AdministracionController@nuevoUsuario' );
Route::get('{idCliente}/admin/editarUsuario/{idUsuario}','AdministracionController@editarUsuario' );

Route::get('cliente/search','buscadorUsuario@search');
//Envio de Formulario
Route::post('admin/guardarUsuario','AdministracionController@guardarUsuario');
Route::post('admin/editarUsuario','AdministracionController@actualizarUsuario');
