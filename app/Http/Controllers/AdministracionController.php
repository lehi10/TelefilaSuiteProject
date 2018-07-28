<?php

namespace telefilaSuite\Http\Controllers;

use telefilaSuite\Persona;
use telefilaSuite\Hospital;
use telefilaSuite\User;
use telefilaSuite\Consultorio;
use telefilaSuite\Especialidad;
use telefilaSuite\Medico;
use telefilaSuite\Agenda;


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
        $users=User::where('hospital_id',Auth::user()->hospital_id)->where('rol_id',">",2)->get();
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
        var_dump($request);
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

    public function eliminarUsuario(Request $request)
    {     
        User::destroy($request->idUser);        
        return redirect('administrador')->with(["message"=>"El usuario ha sido eliminado correctamente."]);
    }



    public  function editUser(Request $request)
    {
        $user=User::find($request->idUsuario);
        $user->rol_id=$request->optRol;
        if ($request->password)
            $user->password=bcrypt($request->password);
        $user->save();
        return redirect('administrador')->with(["message"=>"El usuario ha sido editado con exitossssssssssss"]);
    }





    ///////////////////////////////////  Consultorios

    public function nuevoConsultorio()
    {
        $hospital=Auth::user()->hospital;
        //$especialidades=$hospital->especialidads;
        $especialidades=Especialidad::all();
        $users=$hospital->users->where('rol_id','5');
        //return [$especialidades,$users];
        return view('administracion.nuevoConsultorio',["especialidades"=>$especialidades,'usuarios'=>$users]);
    }

    public function mostrarConsultorios()
    {
        if (Auth::check())
        {
            if (Auth::user()->hospital_id)
            {
                $consultorios=Consultorio::where("hospital_id",Auth::user()->hospital_id)->get();
                $agendas=collect();
                foreach ($consultorios as $key=>$consultorio) {
                    //echo "asdas ".now()->format("Y-m-d")."\n";
                    $agendas->push(Agenda::where('medico_id',$consultorio->medico_id)->where("fecha",now()->format("Y-m-d"))->pluck("turnos")->first());
                }
                //return $agendas;
                return view('administracion.mostrarConsultorios',['consultorios'=>$consultorios,"agendas"=>$agendas]);
            }
        }
    }

    public function crearConsultorio(Request $request)
    {
        //return $request;
        $consultorio= new Consultorio;
        $consultorio->fill($request->except('_token'));
        $consultorio->hospital_id=Auth::user()->hospital_id;
        if ($request->pedestal)
            $consultorio->pedestal=true;
        else
            $consultorio->pedestal=false;
        $consultorio->save();
        return redirect('administrador/consultorios')->with(["message"=>"El consultorio ha sido creado satisfactoriamente"]);
    }

    public function editarConsultorio($idConsultorio)
    {
        //return $idConsultorio;
        $hospital=Auth::user()->hospital;
        $consultorio=Consultorio::find($idConsultorio);
        if ($consultorio->hospital_id==$hospital->id)
        {
            $medicos=Medico::where('hospital_id',$hospital->id)->get();
            //$agenda=Agenda::where('medico_id',$)
            
            return view('administracion.editarConsultorio',["consultorio"=>$consultorio,"medicos"=>$medicos]);

        }
    }

    public function updateConsultorio(Request $request)
    {
        //return $request;
        $consultorio = Consultorio::find($request->id);
        $consultorio->medico_id=$request->medico_id;
        if ($request->nombre)
            $consultorio->nombre=$request->nombre;
        
        
        $consultorio->save();
        return redirect("administrador/consultorios")->with(["message"=>"El consultorio ha sido editado satisfactoriamente"]);
    }
    
    public function cambiarEstadoUsuario(Request $request)
    {
        $user=User::find($request->idUsuario);
        $estado_actual=$user->estado;
        if($estado_actual==0)
            $user->estado=1;
        else 
            $user->estado=0;
        $user->save();
        return "Estado cambiado";
    }

    public function cambiarEstadoConsultorio(Request $request)
    {
        $c=Consultorio::find($request->idConsultorio);
        if($c->pedestal)
            $c->pedestal=0;
        else 
            $c->pedestal=1;
        $c->save();
        return "Estado cambiado";
    }

    public function eliminarConsultorio(Request $request)
    {     
        Consultorio::destroy($request->idConsul);        
        return redirect("administrador/consultorios")->with(["message"=>"El consultorio ha sido eliminado correctamente"]);
    }
    
    
    
}
