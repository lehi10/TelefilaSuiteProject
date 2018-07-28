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
Route::group(['prefix'=>'superuser','middleware' => 'rol:Super Usuario'],function()
{
    //------------- hospitales-------------------
    Route::get('editClient/{idCliente}', 'SuperUsuarioController@editarCliente');
    Route::get('nuevoCliente', 'SuperUsuarioController@nuevoCliente' );
    Route::get('cambiarEstadoCliente','SuperUsuarioController@cambiarEstadoCliente');
    Route::post('store','SuperUsuarioController@storeNuevoCliente');
    Route::post('updateClient/{idCliente}','SuperUsuarioController@updateCliente');

    
    Route::get('/', 'SuperUsuarioController@index');
    Route::get('/inicio', 'SuperUsuarioController@inicio');
    Route::get('/tabla', 'SuperUsuarioController@obtenerTabla');


    //-------------Usuarios-------------------
    Route::get('usersClient/{idCliente}', 'SuperUsuarioController@usersCliente');
    Route::get('{idCliente}/nuevoUser', 'SuperUsuarioController@nuevoUser');
    Route::get('{idUser}/user', 'SuperUsuarioController@clienteUser');
    Route::get('cambiarEstadoUsuario','SuperUsuarioController@cambiarEstadoUsuario');
    Route::post('nuevoUser','SuperUsuarioController@nuevoClientUser');
    Route::post('editUser', 'SuperUsuarioController@editClientUser' );
    
    
    //Route::get('{idCliente}/nuevoUsuario', 'SuperUsuarioController@nuevoUsuario' );
    // Route::post('storeUsuario','SuperUsuarioController@guardarUsuario');
    // Route::get('listaClientes', 'SuperUsuarioController@listarClientes' );
    // Route::get('listaUsuarios', 'SuperUsuarioController@listarUsuarios' );
});


//Rutas para administrador
Route::group(['prefix'=>'administrador','middleware' => 'rol:Administrador'],function()
{
    Route::get('/',function()
    {
        $usuarios = Usuarios::paginate(4);
        $usuarios->withPath('custom/url');   
    });
    Route::get('/',  'AdministracionController@index' );
    Route::get('editar','AdministracionController@editarPerfilHospital');

   

    Route::get('nuevoUsuario','AdministracionController@nuevoUsuario');
    Route::get('/{idUser}/user','AdministracionController@showUser');

    Route::post('/editUser','AdministracionController@editUser');
    Route::post('nuevoUsuario','AdministracionController@guardarUsuario');
    Route::post( '/eliminarUsr','AdministracionController@eliminarUsuario');


    Route::get( 'consultorios','AdministracionController@mostrarConsultorios');
    Route::get( 'nuevoConsultorio','AdministracionController@nuevoConsultorio');
    Route::get( '{idConsultorio}/consultorio','AdministracionController@editarConsultorio');



    Route::post( 'crearConsultorio','AdministracionController@crearConsultorio');
    Route::post( 'editarConsultorio','AdministracionController@updateConsultorio');
    Route::post( '/eliminarConsul','AdministracionController@eliminarConsultorio');
    Route::get('cambiarEstadoUsuario','AdministracionController@cambiarEstadoUsuario');
    Route::get('cambiarEstadoConsultorio','AdministracionController@cambiarEstadoConsultorio');
});


//Rutas para caja
Route::group(['prefix'=>'caja','middleware' => 'rol:Caja'],function()
{
   
    Route::get('/', 'CajaController@index' );
    Route::post('/guardarPago',  'CajaController@guardarPago' );
    Route::post('/eliminarTicket',  'CajaController@eliminarTicket' );


});




//Rutas para recursos humanos
Route::group(['prefix'=>'recursosHumanos','middleware' => 'rol:Recursos Humanos'],function()
{
   
    Route::get('/',  'RecursosHumanosController@index');
    Route::get('nuevoMedico','RecursosHumanosController@nuevoMedico');
    Route::get('{idMedico}/editarMedico','RecursosHumanosController@editarMedico');
    Route::get('{idMedico}/mostrarAgenda','RecursosHumanosController@mostrarAgenda');

    Route::get('consultorios','RecursosHumanosController@mostrarConsultorios');
    Route::get('{idConsultorio}/consultorio','RecursosHumanosController@editarConsultorio');
    
    Route::post('crearMedico','RecursosHumanosController@crearMedico');
    Route::post('{idMedico}/crearAgenda','RecursosHumanosController@crearAgenda');

    Route::post('editarConsultorio/{idConsultorio}','RecursosHumanosController@updateConsultorio');
});


Route::get('/search','SearchController@search');
Route::get('/searchConsultorio','SearchController@searchConsultorio');
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
Route::post('admin/editarUsuario','AdministracionController@eliminarUsuario');



/**
 * Rutas para Modulo de Pedestal
 */

Route::group(['prefix'=>'pedestal'],function()
{
    Route::get('/',  'PedestalController@index' );
    //Route::get('/especialidad',  'PedestalController@especialidad' );
    Route::get('/fecha',  'PedestalController@fecha' );
    Route::get('/imprime',  'PedestalController@imprime' );
    Route::get('/imprimiendo',  'PedestalController@imprimiendo' );

    Route::post('/especialidad',  'PedestalController@especialidad' );
});

//Rutas para admision
Route::group(['prefix'=>'admision','middleware' => 'rol:Admision'],function()
{
    Route::get('/',  'AdmisionController@buscarPaciente' );
    Route::get('/agregarPaciente',  function() {return view('admision.agregarPaciente');} );
    
    
    Route::post('/buscarPaciente',  'AdmisionController@buscarPaciente' );
    Route::post('/agregarPaciente/crearRegistro',  'AdmisionController@crearPaciente' );
    Route::post('/referir','AdmisionController@referir');
});


