<?php

namespace telefilaSuite\Http\Controllers;
use telefilaSuite\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class HistorialController extends Controller
{
    public function index(Request $request)
    {
        $hospitalID = Auth::user()->hospital_id;
        
        $tipo = Hospital::find($hospitalID)->tipo_negocio;

        if($tipo=="otro")
        {
            if(isset($request->dia) && isset($request->mes)&& isset($request->anio))
                $fecha="".$request->anio."-".$request->mes."-".$request->dia;
            else
                $fecha = date("Y-m-d");

            return view('historial.index',["tipo"=>$tipo,"fecha"=>$fecha]);
        }
        else {
            if(isset($request->dia) && isset($request->mes)&& isset($request->anio))
                $fecha="".$request->anio."-".$request->mes."-".$request->dia;
            else
                $fecha = date("Y-m-d");

            
            if(isset($request->especialidad) && $request->especialidad != "" )
            {
                $registros =DB::table('agendas')->select('especialidads.id AS espID','especialidads.nombre AS nombre', 'citas.fecha' )
                ->Join('medicos','medicos.id','=','agendas.medico_id')
                ->Join('especialidads','especialidads.id','=','medicos.especialidad_id')
                ->Join('citas','citas.agenda_id','=','agendas.id')
                ->where('citas.hospital_id',$hospitalID)
                ->where('citas.fecha',$fecha)
                ->Where('especialidads.id',$request->especialidad)
                ->Where('citas.pagado',1)
                ->groupBy('especialidads.id','especialidads.nombre','citas.fecha')
                ->get();
                return view('historial.index',["registros"=> $registros,"tipo"=>$tipo]);
            }

            $registros =DB::table('agendas')->select('especialidads.id as espID','especialidads.nombre as nombre', 'citas.fecha' )
            ->Join('medicos','medicos.id','=','agendas.medico_id')
            ->Join('especialidads','especialidads.id','=','medicos.especialidad_id')
            ->Join('citas','citas.agenda_id','=','agendas.id')
            ->where('citas.hospital_id',$hospitalID)
            ->where('citas.fecha',$fecha)
            ->Where('citas.pagado',1)
            ->groupBy('especialidads.id','especialidads.nombre','citas.fecha')
            ->get();
            

            return view('historial.index',["registros"=> $registros,"tipo"=>$tipo]);
        }        
            
    }


}
