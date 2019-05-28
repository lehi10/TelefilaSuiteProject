<?php

namespace telefilaSuite\Http\Controllers;

use telefilaSuite\Paciente;
use telefilaSuite\Hospital;
use telefilaSuite\Cita;
use telefilaSuite\Consultorio;
use telefilaSuite\Especialidad;
use telefilaSuite\Agenda;
use Illuminate\Http\Request;
use DateTime;
use Illuminate\Support\Facades\DB;
use Milon\Barcode\DNS1D;
use Milon\Barcode\DNS2D;
use SoapClient; 
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Exception;

class PedestalController extends Controller
{
    public function root()
    {
        return view('pedestal.root');
    }
    public function index(Request $request)
    {
        
        $hospital=Hospital::where('codigo',$request->codigo)->first();

        if ($hospital)
        {
            return view('pedestal.index',['hospital_id'=>$hospital->id,'codigo'=>$hospital->codigo,"tipo"=>$hospital->tipo]);
        }
        return redirect('/pedestal')->with(['message'=>'El hospital requerido no existe']);
    }

    public function especialidad(Request $request)
    {
        
        if(isset($request->dni))
        {

            $hospital=Hospital::find($request->hospital_id);            
            


            if($hospital->tipo_negocio =="otro")
            {
                
                
                
                $consulta = @file_get_contents('http://aplicaciones007.jne.gob.pe/srop_publico/Consulta/Afiliado/GetNombresCiudadano?DNI='.$request->dni);
                $persona =explode('|',$consulta);
                if($persona[0]!="")
                {
                    $consultorios = $hospital->consultorios()->where("pedestal",1)->has('medico');
                    
                    $especialidades=$consultorios->join("especialidads","especialidad_id","=","especialidads.id")
                                    ->select("especialidads.id as id",
                                            "especialidads.nombre as nombre",
                                            "consultorios.id as idConsultorio" )
                                    ->get();

                    return view('pedestal.especialidad',['dni'=>$request->dni,'especialidades'=>$especialidades,'codigo'=>$hospital->codigo,'tipo'=>$hospital->tipo_negocio,'hospital_id'=>$hospital->id,'paciente'=>$persona]);
                }
                return redirect('pedestal/'.$hospital->codigo)->with(['message'=> 'El DNI no es valido, o el paciente aun no tiene un registro. Puede acercarse a Admisión para solucionar el problema.']);
            }

            $paciente = Paciente::where('dni',$request->dni)->where('hospital_id',$hospital->id)->first();
            if($paciente)            
            {
                //$hospital=Hospital::find($paciente->hospital_id);
                //$especialidades=Especialidad::all();

                $especialidades = $hospital->consultorios()->where("pedestal",1)->has('medico')->pluck("especialidad_id");
                $consultorios = $hospital->consultorios()->where("pedestal",1)->has('medico');
                
                //$especialidades = Especialidad::find($especialidades);   //Especialidades con al menos un consultorio en pedestal

                //$test1= $especialidades;
                //$test2= $consultorios->get();
                $especialidades=$consultorios->join("especialidads","especialidad_id","=","especialidads.id")
                                    ->select("especialidads.id as id",
                                            "especialidads.nombre as nombre",
                                            "consultorios.id as idConsultorio" )
                                    ->get();
                

                /*
                $test = Especialidad::find($especialidades)->joinSub($consultorios,'consultorios',function($join){
                    $join->on('especialidades.id','=','consultorios.especialidad_id');
                })->get();   //Especialidades con al menos un consultorio en pedestal
                */

                $especialidadesReferidas = DB::table('especialidad_paciente as a')->select('a.*')->where('paciente_id',$paciente->id)
                    ->Join('especialidads as b','b.id','=','a.especialidad_id')->get();
                
                $especialidadesReferidas=$paciente->especialidads
                    ->filter(function($item){
                        $n=Carbon::now();
                        $i=Carbon::parse($item->pivot->inicio);
                        $f=Carbon::parse($item->pivot->final);
                        return $n->between($i,$f);
                    });
                //dd($especialidadesReferidas);
                
                return view('pedestal.especialidad',['hospital_id'=>$hospital->id,'dni'=>'','paciente'=>$paciente,'especialidades'=>$especialidades,'especialidadesReferidas'=>$especialidadesReferidas,'codigo'=>$hospital->codigo,'tipo'=>$hospital->tipo]);
            }
            else
            {
                return redirect('pedestal/'.$hospital->codigo)->with(['message'=> 'El DNI no es valido, o el paciente aun no tiene un registro. Puede acercarse a Admisión para solucionar el problema.']);
            }
        }
        $hos=Hospital::find($request->hospital_id);
        return redirect('pedestal/'.$request->codigo)->with(['message'=> 'Ingrese DNI']);
    }


    public function fecha(Request $request)
    {

        $paciente = Paciente::select('*')->where('dni',$request->dni)->first();
        $consultorios = DB::table('consultorios as c')
        ->where('hospital_id',$request->hospital_id)
        ->where('especialidad_id',$request->especialidad_id)
                    ->join('agendas as a','c.medico_id','=','a.medico_id')
                    ->select('c.especialidad_id','c.medico_id','a.fecha','a.dia','a.turnos')
                    ->orderBy('a.dia')
                    ->get();

        $time=now();
        $fechas = $consultorios->unique('dia');

        $now=Carbon::create();
        $after=$now->copy()->addDays(9);
        $Pfechas=CarbonPeriod::create($now->format("Y-m-d"),$after)->toArray();
        $hospital=Hospital::find($request->hospital_id);
        $consultorios=$hospital->consultorios()->where('especialidad_id',$request->especialidad_id)->get();

        //$consultorios=Consultorio::where('hospital_id',$request->hospital_id)->where('especialidad_id',$request->especialidad_id)->get();
        $fechas=collect();
        foreach ($Pfechas as $fecha) {
            $disp=0;
            $turnos=0;
            foreach ($consultorios as $consultorio) {
                if($consultorio->medico)
                {
                    $disp = $disp + $consultorio->medico->getTurnosByDate($fecha);
                    $agenda = $consultorio->medico->agendas()->where('fecha',$fecha)->first();
                    if ($agenda)
                        $turnos = $turnos + $agenda->turnos;
                }
            }
            if ($disp>=0)
                $fechas->push(['fecha'=>$fecha,'disp'=>$turnos-$disp]);
            else
                $fechas->push(['fecha'=>$fecha,'disp'=>-1]);


        }
        //return $fechas;


        $days_dias = array(
            'Monday'=>'Lunes','Tuesday'=>'Martes','Wednesday'=>'Miércoles','Thursday'=>'Jueves',
            'Friday'=>'Viernes','Saturday'=>'Sábado','Sunday'=>'Domingo'
        );


        $months_meses = array(
            'January' => 'Enero','February' => 'Febrero','March' => 'Marzo','April' => 'Abril',
            'May' => 'Mayo','June' => 'Junio','July' => 'Julio','August' => 'Agosto','September' => 'Septiembre',
            'October' => 'Octubre','November' => 'Noviembre','December' => 'Diciembre'
        );

        $idConsultorio=$request->idConsultorio;

        return view("pedestal.fecha1",["idConsultorio"=>$idConsultorio,"day_dias"=>$days_dias,"months_meses"=>$months_meses,"fechas"=>$fechas,'nombres'=>$request->nombres,'apellidos'=>$request->apellidos,
        'paciente_id'=>$request->paciente_id,'especialidad_id'=>$request->especialidad_id,
        'Pmes'=>$time->formatLocalized('%B'),'mes'=>$time->format('m'),'year'=>$time->format('Y'),
        'codigo'=>$request->codigo]);



        $meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Setiembre','Octubre','Noviembre','Diciembre'];

        $collection = collect();
        //dd($fechas);
        foreach($fechas as $key=>$f){
            $cupos = $consultorios->where('dia',$f->dia)->sum('turnos');
            $dia = $days_dias[date('l', strtotime($f->fecha))];
            $collection->push(['fecha'=>$f->dia,'dia'=>$dia ,'cupos'=>$cupos,]);
        }
        $mes =$months_meses[date('F', strtotime($fechas[0]->fecha))];
        //dd($collection);
        return view('pedestal.fecha',['nombres'=>$request->nombres,'apellidos'=>$request->apellidos,
                                    'paciente_id'=>$request->paciente_id,'especialidad_id'=>$request->especialidad_id,
                                    'mes'=>$time->format('m'),'year'=>$time->format('Y'),
                                    'codigo'=>$request->codigo,'cuposXdia'=>$collection,'mes'=>$mes]);
    }


    public function imprime(Request $request)
    {
        
        
        $hospital=Hospital::where('codigo',$request->codigo)->first();

        
        if($hospital->tipo_negocio=="otro")
        {
            
            
            $dni=$request->paciente_id;
            $paciente_db=Paciente::where('dni', $dni)->get();
            
            $paciente_id = 0;
            if(count($paciente_db)==0) // No existe dni en la DB
            {
                
                $new_paciente= new Paciente;
                $new_paciente->nombres= $request->personaNombre;
                $new_paciente->apellidos=$request->personaApellidoP;
                $new_paciente->dni=$dni;
                $new_paciente->departamento="nan";
                $new_paciente->ciudad="nan";
                $new_paciente->sis=0;
                $new_paciente->sexo=0;
                $new_paciente->edad=0;
                $new_paciente->hospital_id=$request->hospital_id;
                $new_paciente->save();

                $paciente_id=$new_paciente->id;
            }
            else
            {
                $paciente_id =$paciente_db[0]->id;
            }
            
            

            $dateTime = new DateTime('now', new \DateTimeZone('America/Lima')); 
            $fecha= $dateTime->format(" d/m/y  H:i A"); 

            $cita=new Cita;
            $cita->fecha=$dateTime;
            $cita->horaInicio=$dateTime->format('H:i');
            $cita->horaFinal="09:00";
            $cita->paciente_id=$paciente_id;
            $cita->hospital_id=$request->hospital_id;
            $cita->agenda_id=156; //Todo se carga en una sola agenda
            $cita->pagado=false;
            $cita->consultorio_id=$request->idConsultorio;
            
            $cita->save();

            $consultorio = Consultorio::find($request->idConsultorio);
            $especialidad=Especialidad::find($consultorio->especialidad_id);
            $tarifa=round($consultorio->tarifa,2);
            
            $nroTicket=$cita->id;
            
            $persona=[$request->personaApellidoP,$request->personaApellidoM,$request->personaNombre];

            $dateTime = new DateTime('now', new \DateTimeZone('America/Lima')); 
            $fecha= $dateTime->format(" d/m/y  H:i A"); 
            
            $tipoServicio=$especialidad->nombre;
            return view('pedestal.imprime',['paciente'=>$request->paciente_id,'codigo'=>$request->codigo,'hospital'=>$hospital,'tipo'=>$request->tipo,"tarifa"=>$tarifa,'nroTicket'=>$nroTicket,"fecha"=>$fecha,"tipoServicio"=>$tipoServicio,"persona"=>$persona,'tipo'=>$hospital->tipo_negocio,"cita"=>$nroTicket]);
        }
        

        $hospital=Hospital::where('codigo',$request->codigo)->first();
        $paciente=Paciente::find($request->paciente_id);
        //$date=new DateTime($request->dia);
        $dia=$request->dia;
        $medicos=$paciente->hospital->consultorios()->where('pedestal',1)
                    ->where('especialidad_id',$request->especialidad_id)->has('medico')
                    ->with('medico')->get()->pluck('medico');


        $agendas=collect();
        foreach ($medicos as $medico) {
            $agenda=$medico->agendas->where('fecha',$dia)->first();
            if ($agenda)
            {
                $citas=$agenda->citas;
                $ncitas=$citas->count();
                if ($ncitas<$agenda->turnos)
                {
                    $agendas->push($agenda);
                }
            }
        }

        $agendaEscogida=$agendas->first();
        if (!$agendaEscogida)
        {
            return redirect("pedestal/".$request->codigo)->with(['message'=>'No se encontro ningun consultorio disponible.']);
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
        $idConsultorio = $request->idConsultorio; // Id del consultorio seleccionado

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
        $cita->consultorio_id=$idConsultorio;
        $cita->save();

        // Actualiza el valor de citasReservadas
        $agendaSeleccionada=Agenda::find($agendaEscogida->id);
        $agendaSeleccionada->turnosReservados++;
        $agendaSeleccionada->save();




        return view('pedestal.imprime',['idConsultorio'=>$idConsultorio,'cita'=>$cita,'paciente'=>$paciente,'consultorio'=>$consultorio,'medico'=>$medico,'codigo'=>$request->codigo,'hospital'=>$hospital,'tipo'=>$hospital->tipo_negocio]);
    }

    public function imprimiendo(Request $request)
    {
        return view('pedestal.imprimiendo',['codigo'=>$request->codigo]);
    }
}
