<?php

namespace telefilaSuite\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use telefilaSuite\Medico;
use telefilaSuite\Especialidad;
use telefilaSuite\Agenda;
use telefilaSuite\Consultorio;

use DateTime;

use Auth;

function days_in_month($month, $year) {
    return date('t', mktime(0, 0, 0, $month+1, 0, $year));
}
class RecursosHumanosController extends Controller
{
    //


    public function __construct()
    {
        $this->middleware(['auth','rol:Recursos Humanos']);
    }
    public function index()
    {
        $medicos=Medico::where('hospital_id',Auth::user()->hospital_id)->get();
        $agendas = collect();
        foreach ($medicos as $key=>$medico)
        {
            if($medico->agenda)
            {
                $medico->turnos = $medico->agenda->citas->where('fecha',now())->where('medico_id',$medico->id)->where('pagado',1);
            }
            else
            {
                $medico->turnos = '-';
            }
        }
        //return $medicos;
        return view('recursosHumanos.index',["medicos"=>$medicos]);

    }

    public function nuevoMedico()
    {
        $especialidades=Especialidad::all();
        return view('recursosHumanos.nuevoMedico',["especialidades"=>$especialidades]);
    }

    public function crearMedico(Request $request)
    {
        if (Auth::user()->hospital_id)
        {
            $apell = $request->apellidos;
            $validateData = $request->validate([
                'nombres' => [
                    'required',
                     Rule::unique('medicos')->where( function ($query) use ($apell){
                        $query->where([
                            ['hospital_id',Auth::user()->hospital_id],
                            ['apellidos',$apell],
                        ]);
                    }),
                ],
                'apellidos' => 'required',
                'cmp' => [
                    'required',
                    'numeric',
                     Rule::unique('medicos')->where( function ($query) {
                        $query->where('hospital_id',Auth::user()->hospital_id);
                    }),
                ],
                'celular' => 'required|numeric',
            ]);
            $medico=new Medico;
            $medico->fill($request->except('_token'));
            $medico->hospital_id=Auth::user()->hospital_id;
            $medico->save();
            return redirect(Auth::user()->rolUrl())->with(["message"=>"El médico ha sido registrado satisfactoriamente."]);
        }
        return "Debug Message";
    }

    public function editarMedico($idMedico)
    {
        $medico=Medico::find($idMedico);
        if (Auth::user()->hospital_id==$medico->hospital_id)
        {
            return view('recursosHumanos.editarMedico',['medico'=>$medico]);
        }


        return "Editar Medico";
    }

    public function mostrarAgenda($idMedico,Request $request)
    {
        $medico=Medico::find($idMedico);
        if (Auth::user()->hospital_id==$medico->hospital_id)
        {
            $diasMes = days_in_month ( $request['month'] , $request['year'] );
            setlocale(LC_TIME, 'es_ES.UTF-8');
            $nombreMes=strftime("%B",mktime(0, 0, 0, $request['month'], 1, 2000));
            //sprintf("%s-%s-%s",$request->year,$request->mes,$dia)
            $agendas= Agenda::where("medico_id",$idMedico)->whereMonth('fecha',$request->month)->get()->keyBy("dia");
            //$dias=$agendas->pluck('id');
            //return $agendas;
            return view('recursosHumanos.editarMedico',[ 'crearFlag'=>True,'medico'=>$medico ,'diasMes'=>$diasMes ,'month' =>$request->month , 'year' =>$request['year'] ,'agendas'=>$agendas,'mes'=>$nombreMes]);
        }
        return "Crear Agenda";
    }

    public function crearAgenda($idMedico,Request $request)
    {
        $agendas=$request->except(["year","_token","mes","fecha"]);

        //dd($agendas);
        $f=new DateTime();
        foreach ($agendas as $dia=>$agenda) {
            //echo $dia."->".$agenda["horaInicio"]."\n";
            $a=new Agenda;
            $a->fecha=sprintf("%s-%s-%s",$request->year,$request->mes,$dia);
            $a->horaInicio=$agenda["horaInicio"];
            $a->dia=$dia;
            $a->horaFinal=$agenda["horaFinal"];
            $a->tiempoCita=$agenda["tiempoCita"];
            $a->turnos=$agenda["turnos"];
            $a->medico_id=$idMedico;
            $a->save();
            //echo $a."\n";
        }
//        echo "\n";
  //      echo "\n";

        return redirect('recursosHumanos')->with(["message"=>"La agenda ha sido creada correctamente."]);
    }


    public function mostrarConsultorios()
    {
        if (Auth::user()->hospital_id)
            {
                $consultorios=Consultorio::where("consultorios.hospital_id",Auth::user()->hospital_id)
                        ->leftJoin('medicos', 'consultorios.medico_id', '=', 'medicos.id')
                        ->leftJoin('agendas','agendas.medico_id','=','consultorios.medico_id')
                        ->select('consultorios.*', 'medicos.turno','agendas.turnos','agendas.id as agenda_id','agendas.turnosReservados as reservados','agendas.turnosPagados as pagados', 'agendas.horaInicio as inicio', 'agendas.horaFinal as final','agendas.fecha as fecha')
                        ->get();
                $agendas=collect();


                return view('recursosHumanos.mostrarConsultorios',['consultorios'=>$consultorios]);
        }
    }


    public function editarConsultorio($idConsultorio)
    {
        $hospital=Auth::user()->hospital;
        $consultorio=Consultorio::find($idConsultorio);
        if ($consultorio->hospital_id==$hospital->id)
        {
            $medicos=Medico::where('hospital_id',$hospital->id)->doesntHave('consultorio')->get();
            if($consultorio->medico)
                $medicos->push($consultorio->medico);

            //$agenda=Agenda::where('medico_id',$)

            return view('recursosHumanos.editarConsultorio',["medicos"=>$medicos,"consultorio"=>$consultorio]);
        }
        return "Consultorio: ".$idConsultorio;
    }

    public function updateConsultorio($idConsultorio, Request $request)
    {
        $consultorio=Consultorio::find($idConsultorio);
        $consultorio->medico_id=$request->medico_id;
        $consultorio->save();
        return redirect("recursosHumanos/consultorios")->with(["message"=>"El médico ha sido asignado correctamente"]);
    }
}
