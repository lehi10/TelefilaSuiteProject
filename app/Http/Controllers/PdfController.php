<?php

namespace telefilaSuite\Http\Controllers;

use Illuminate\Support\Facades\DB;
use telefilaSuite\Paciente;
use telefilaSuite\Hospital;

use Illuminate\Http\Request;
use Auth;

class PdfController extends Controller
{
    public function invoice(Request $request) 
    {
        
        if(!isset($request->especialidad)&& !isset($request->fecha))
            return abort(404);

        $hospitalID = Auth::user()->hospital_id; 
        $hospital= Hospital::find($hospitalID);

        $especialidad=DB::table('especialidads')->find($request->especialidad);        
        
        $registros=DB::table('citas')
        ->select('medicos.especialidad_id',
                'pacientes.id               as pacienteID',
                'pacientes.nombres          as pacienteNombres',
                'pacientes.apellidos        as pacienteApellidos',
                'citas.horaInicio           as horaCita')
        ->Join('pacientes','pacientes.id','=','citas.paciente_id')
        ->Join('agendas','agendas.id','=','citas.agenda_id')
        ->Join('medicos','medicos.id','=','agendas.medico_id')
        ->Where('citas.hospital_id',$hospitalID)
        ->Where('citas.fecha',$request->fecha)
        ->Where('medicos.especialidad_id',$request->especialidad)
        ->Where('citas.pagado',1)->get();
        
        if(count($registros)==0)
            return abort(404);

        $view =  \View::make('historial.invoice',['especialidad'=>$especialidad,'hospital'=>$hospital,'registros'=>$registros,'fecha'=>$request->fecha])->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('Hospital '.$hospital->nombre.'_'.$especialidad->nombre.'_'.$request->fecha.'.pdf');


        

    }

    
}
