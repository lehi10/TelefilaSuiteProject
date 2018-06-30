<?php

namespace telefilaSuite\Http\Controllers;

use Illuminate\Http\Request;
use telefilaSuite\Medico;
use telefilaSuite\Especialidad;
use telefilaSuite\Agenda;
use DateTime;   

use Auth;

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
            $diasMes = cal_days_in_month (CAL_GREGORIAN, $request['month'] , $request['year'] );
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

}
