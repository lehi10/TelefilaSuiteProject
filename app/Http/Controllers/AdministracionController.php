<?php

namespace telefilaSuite\Http\Controllers;

use telefilaSuite\Persona;
use telefilaSuite\Hospital;
use telefilaSuite\User;
use Illuminate\Http\Request;
use Auth;

class AdministracionController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['auth','rol:Administrador']);
    }

    public function index()
    {
        $users=User::where('hospital_id',Auth::user()->hospital_id)->where('rol_id',"!=",2)->get();
        //return Auth::user()->hospital_id;
        //return $users;
        return view('administracion.index',['usuarios'=>$users,'hospital_id'=>Auth::user()->hospital_id]);
    }

    // Show the form
    public function showUser($idUser)
    {
        $user=User::find($idUser);
        return view('administracion.editarUsuario',['usuario'=>$user]);
    }

    public function nuevoUsuario()
    {

        return view('administracion.nuevoUsuario',['hospital_id'=>Auth::user()->hospital_id]);
    }


    public function guardarUsuario( Request $request)
    {

     //   return $request;
     
        $user= new User;
        $user->fill($request->except(["_token"]));
        $user->password=bcrypt($request->password);
        if ($request->estado)
            $user->estado=true;
        else
            $user->estado=false;
        $user->save();

     
        return redirect('administrador')->with(["message"=>"El usuario ha sido creado con exito."]);
    }



    public  function editUser(Request $request)
    {
        $user=User::find($request->idUsuario);
        $user->rol_id=$request->optRol;
        if ($request->password)
            $user->password=bcrypt($request->password);
        $user->save();
        return redirect('administrador')->with(["message"=>"El usuario ha sido editado con exito"]);
    }

    public function nuevoConsultorio(Request $request)
    {
        return view('administracion.nuevoConsultorio');
    }


    public function mostrarConsultorios(Request $request)
    {
        return view('administracion.mostrarConsultorios');
    }

    public function showConsultorio(Request $request)
    {
        return view('administracion.editarConsultorio');
    }
    
    
    
}
