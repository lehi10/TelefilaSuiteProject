<?php

namespace telefilaSuite\Http\Controllers;

use Illuminate\Http\Request;

class AdministracionController extends Controller
{
    
    public function __construct()
    {
      
    }

    public function index(Request $request, $idCliente)
    {
        return "inicio" ;
    }

    public function nuevoUsuario(Request $request, $idCliente)
    {
        return view('administracion.nuevoUsuario');
    }
    
    public function editarUsuario( Request $request,$idCliente,$idUsuario)
    {
        return view('administracion.editarUsuario');
    }

    public function guardarUsuario( Request $request, $idCliente)
    {
        $per= new Persona;
        $per->nombre=$request->nombre;
        $per->apellido=$request->apellidos;
        $per->dni=$request->dni;
        $per->telefono=0;
        $per->sexo=0;
        $per->edad=0;
        $per->direccion="-";
        $per->save();
     
        $user= new User;
        $user->email=$request->email;
        $user->username=$request->usuario;
        $user->password=bcrypt($request->password);
        $user->hospital_id=$request->hospital_id;
        $user->rol=0;
        $user->persona_id=$per->id;
        $user->save();

        echo "DNI  : ".$request['hospital_id']."<br>";
        echo $request;

        return "guardar Usuario";
    }
}
