<?php

namespace telefilaSuite\Http\Controllers;

use telefilaSuite\Paciente;
use telefilaSuite\Hospital;
use telefilaSuite\Cita;
use telefilaSuite\Especialidad;
use Illuminate\Http\Request;
use DateTime;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class PedestalController extends Controller
{
    public function index()    
    {
        return view('pedestal.index');
    }

    public function especialidad(Request $request)
    {
        //return $request;
        if(isset($request->dni))
        {
            
            $paciente = Paciente::select('*')->where('dni',$request->dni)->first();
            if($paciente)
            {
                $hospital=Hospital::find($paciente->hospital_id);
                //$especialidades=Especialidad::all();
                $especialidades = $hospital->consultorios()->where("pedestal",1)->pluck("especialidad_id");
                $especialidades = Especialidad::find($especialidades);   //Especialidades con al menos un consultorio en pedestal
                
                
                // $especialidadesReferidas = DB::table('especialidad_paciente')->select('especialidads.*')->where('paciente_id',$paciente->id)
                //     ->Join('especialidads','especialidads.id','=','especialidad_paciente.especialidad_id')->get()

                $especialidadesReferidas=$paciente->especialidads
                    ->filter(function($item){
                        $n=Carbon::now();
                        $i=Carbon::parse($item->pivot->inicio);
                        $f=Carbon::parse($item->pivot->final);
                        return $n->between($i,$f);
                    });
                
                
                //return $especialidadesReferidas;
                
                
                return view('pedestal.especialidad',['paciente'=>$paciente,'especialidades'=>$especialidades,'especialidadesReferidas'=>$especialidadesReferidas]);    
            }
            else
            {
                return redirect('pedestal')->with(['message'=> 'El DNI no es valido, o el paciente aun no tiene un registro. Puede acercarse a Admisión para solucionar el problema.']);        
            }
        }
        return redirect('pedestal')->with(['message'=> 'Ingrese DNI']); 
    }


    public function fecha(Request $request)
    {
        //return $request;
        $time=now();
        return view('pedestal.fecha',['nombres'=>$request->nombres,'apellidos'=>$request->apellidos,
                                    'paciente_id'=>$request->paciente_id,'especialidad_id'=>$request->especialidad_id,
                                    'mes'=>$time->format('m'),'year'=>$time->format('Y')]);
    }
    
    public function imprime(Request $request)
    {
        //return $request;
        $paciente=Paciente::find($request->paciente_id);
        $date=new DateTime($request->dia);
        $dia='2018-08-04';
        $medicos=$paciente->hospital->consultorios()->where('pedestal',1)
                    ->where('especialidad_id',$request->especialidad_id)->has('medico')
                    ->with('medico')->get()->pluck('medico');
        
        $agendas=collect();
        foreach ($medicos as $medico) {
            $agenda=$medico->agendas->where('fecha',$dia)->first();
            $citas=$agenda->citas;
            $ncitas=$citas->count();
            if ($ncitas<$agenda->turnos)
            {
                $agendas->push($agenda);
            }
        }
        $agendaEscogida=$agendas->first();
        if (!$agendaEscogida)
        {
            return redirect('/pedestal')->with(['message'=>'No se encontro ningun consultorio disponible.']);
        }

        $consultorio=$agendaEscogida->medico->consultorio;
        $lastCita=$agendaEscogida->citas->sortByDesc('horaFinal')->first();
        if ($lastCita)
        {
            $hora=$lastCita->horaFinal;
        }
        else{
            $hora=$agendaEscogida->horaInicio;
        }

        $medico=$consultorio->medico;

        $cita=new Cita;
        $cita->fecha=$dia;
        $hora=new DateTime($hora);
        $cita->horaInicio=$hora->format('H:i');
        $hora->modify('+'.$agendaEscogida->tiempoCita.' minutes');
        $cita->horaFinal=$hora->format('H:i');
        $cita->paciente_id=$request->paciente_id;
        $cita->hospital_id=$paciente->hospital->id;
        $cita->agenda_id  =$agendaEscogida->id;
        $cita->pagado=false;
        $cita->save();
        return view('pedestal.imprime',['cita'=>$cita,'paciente'=>$paciente,'consultorio'=>$consultorio,'medico'=>$medico]);
    }
    
    public function imprimiendo(Request $request)
    {
        return view('pedestal.imprimiendo');
    }
}
