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


Auth::routes();

Route::get('/', function(){
    return view('index');
})->middleware('guest');
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
    Route::get('cliente/{idCliente}', 'SuperUsuarioController@cliente');

    Route::get('nuevoCliente', 'SuperUsuarioController@nuevoCliente' );
    
    Route::get('{idCliente}/nuevoUser', 'SuperUsuarioController@nuevoUser');
    Route::get('{idUser}/user', 'SuperUsuarioController@clienteUser');
    
    Route::post('store','SuperUsuarioController@nuevoCliente');
    
    Route::post('nuevoUser','SuperUsuarioController@nuevoClientUser');
    Route::post('editUser', 'SuperUsuarioController@editClientUser' );
    
    Route::get('cambiarEstadoUsuario','SuperUsuarioController@cambiarEstadoUsuario');
    
    //Route::get('{idCliente}/nuevoUsuario', 'SuperUsuarioController@nuevoUsuario' );
    // Route::post('storeUsuario','SuperUsuarioController@guardarUsuario');
    // Route::get('listaClientes', 'SuperUsuarioController@listarClientes' );
    // Route::get('listaUsuarios', 'SuperUsuarioController@listarUsuarios' );
});


//Rutas para administrador
Route::group(['prefix'=>'administrador','middleware' => 'rol:Administrador'],function()
{
    Route::get('/',  'AdministracionController@index' );

    Route::get('nuevoUsuario','AdministracionController@nuevoUsuario');
    Route::get('/{idUser}/user','AdministracionController@showUser');

    Route::post('/editUser','AdminishttptracionController@editUser');
    Route::post('nuevoUsuario','AdministracionController@guardarUsuario');


    Route::get( 'consultorios','AdministracionController@mostrarConsultorios');
    Route::get( 'nuevoConsultorio','AdministracionController@nuevoConsultorio');

    Route::get('editar','AdministracionController@editarPerfilHospital');


    Route::get('cambiarEstadoUsuario','AdministracionController@cambiarEstadoUsuario');
    
    Route::get( '{idConsultorio}/consultorio','AdministracionController@editarConsultorio');
    
    Route::post( 'crearConsultorio','AdministracionController@crearConsultorio');
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
