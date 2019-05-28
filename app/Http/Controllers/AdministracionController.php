<?php

namespace telefilaSuite\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use telefilaSuite\Persona;
use telefilaSuite\Hospital;
use telefilaSuite\User;
use telefilaSuite\Consultorio;
use telefilaSuite\Especialidad;
use telefilaSuite\Medico;
use telefilaSuite\Agenda;


use Auth;

class AdministracionController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','rol:Administrador']);
    }

    public function index1()
    {
        return view('layouts.base');
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

     //   return $request;
        $apell = $request->apellidos;
        $validateData = $request->validate([
            'nombres' => [
                    'required',
                     Rule::unique('users')->where( function ($query) use ($apell){
                        $query->where([
                            ['hospital_id',Auth::user()->hospital_id],
                            ['apellidos',$apell],
                        ]);
                    }),
                ],
            'apellidos' => 'required',
            'password' => 'required',
        ]);
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
        return redirect('administrador')->with(["message"=>"El usuario ha sido editado con exitos"]);
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
                /*
                $consultorios=Consultorio::where("consultorios.hospital_id",Auth::user()->hospital_id)
                        ->leftJoin('medicos', 'consultorios.medico_id', '=', 'medicos.id')
                        ->leftJoin('agendas','agendas.medico_id','=','consultorios.medico_id')
                        ->select('consultorios.*', 'medicos.turno','agendas.turnos','agendas.id as agenda_id','agendas.turnosReservados as reservados','agendas.turnosPagados as pagados', 'agendas.horaInicio as inicio', 'agendas.horaFinal as final','agendas.fecha as fecha')
                        ->get();
                */
                $consultorios=Consultorio::where("consultorios.hospital_id",Auth::user()->hospital_id)
                        ->get();
                
                return view('administracion.mostrarConsultorios',['consultorios'=>$consultorios]);
            }
        }
    }

    public function turnosConsultorio(Request $request)
    {

        if (Auth::check())
        {
            if (Auth::user()->hospital_id)
            {
                $idConsultorio=$request['idConsultorio'];


                $consultorio = Consultorio::where("consultorios.id",$idConsultorio)->where("consultorios.hospital_id",Auth::user()->hospital_id);
                $datosConsultorio=Consultorio::where("consultorios.id",$idConsultorio)->where("consultorios.hospital_id",Auth::user()->hospital_id)->first();
                $turnos=$consultorio->leftJoin('medicos', 'consultorios.medico_id', '=', 'medicos.id')
                                    ->leftJoin('agendas','agendas.medico_id','=','consultorios.medico_id')
                                    ->select('consultorios.*', 'medicos.turno','agendas.turnos','agendas.id as agenda_id','agendas.turnosReservados as reservados','agendas.turnosPagados as pagados', 'agendas.horaInicio as inicio', 'agendas.horaFinal as final','agendas.fecha as fecha')
                                    ->get();

                return view('administracion.mostrarConsultoriosTurnos',['consultorioTurnos'=>$turnos,'datosConsultorio'=>$datosConsultorio]);
            }
        }
    }



    public function crearConsultorio(Request $request)
    {
        //return $request;

        $validateData = $request->validate([
            'nombre' => [
                    'required',
                     Rule::unique('consultorios')->where( function ($query){
                        $query->where([
                            ['hospital_id',Auth::user()->hospital_id],
                        ]);
                    }),
                ],
        ]);
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
        $hospital=Auth::user()->hospital;
        $consultorio=Consultorio::find($idConsultorio);
        $tarifa = round($consultorio->tarifa,2);
        
        
        if ($consultorio->hospital_id==$hospital->id)
        {
            $medicos=Medico::where('hospital_id',$hospital->id)->get();
            return view('administracion.editarConsultorio',["consultorio"=>$consultorio,"medicos"=>$medicos,"tarifa"=>$tarifa]);
        }
    }

    public function updateConsultorio(Request $request)
    {
        
        
        
        $consultorio = Consultorio::find($request->id);
        $consultorio->medico_id=$request->medico_id;

        
        if ($request->nombre)
            $consultorio->nombre=$request->nombre;
        
        $consultorio->tarifa= $request->precio;
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
