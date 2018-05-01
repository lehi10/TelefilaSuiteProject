<?php

namespace telefilaSuite\Http\Controllers;

use telefilaSuite\Persona;
use telefilaSuite\Hospital;
use telefilaSuite\User;
use Illuminate\Http\Request;

class AdministracionController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request, $idCliente)
    {
        if($request['nombreUsuario'])
        {            
            $usuarios =User::where('username','LIKE' ,'%'.$request['nombreUsuario'].'%')->where('hospital_id',$request['idCliente'])->get(); 
            $hospital=Hospital::find($idCliente)->nombre;
            
            return view('administracion.index',compact('usuarios','hospital'));
        }
        else
        {

            $usuarios =User::where('hospital_id',$request['idCliente'])->get(); ;        
            $hospital=Hospital::find($idCliente)->nombre;
            $id=Hospital::find($idCliente)->id;
            return view('administracion.index',compact('usuarios','hospital','id'));
        }
    }

    public function nuevoUsuario(Request $request, $idCliente)
    {
        return view('administracion.nuevoUsuario',["id"=>$idCliente]);
    }
    
    public function editarUsuario( Request $request,$idCliente,$idUsuario)
    {
        $usuario =User::where('id',$idUsuario)->first();           
        return view('administracion.editarUsuario',compact('usuario'));
    }

    public function guardarUsuario( Request $request)
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
        $user->rol=$request->optRol;
        $user->persona_id=$per->id;
        $user->save();

     
        return redirect($request->hospital_id.'/admin');
    }
    public function actualizarUsuario( Request $request)
    {
        $user=User::find($request->idUsuario);
        if($request->password)
        {
            $user->password=$request->password;
        }
        $user->rol=$request->optRol;    
        $user->save();
        
        return redirect('/'.$request->idCliente.'/admin');
    }

    
}
