<?php

namespace telefilaSuite\Http\Controllers;

use Illuminate\Http\Request;
use telefilaSuite\Hospital;
use telefilaSuite\Paciente;
use Illuminate\Support\Facades\DB;
use Auth;

class CajaController extends Controller
{
    public function index()    
    {
        $hospitalID = Auth::user()->hospital_id; 
        $citas = DB::table('citas')
            ->join('pacientes', 'citas.paciente_id', '=', 'pacientes.id')
            ->where('hospital_id',$hospitalID)
            ->where('fecha',date("Y-m-d"))
            ->get();
        return $citas;
        //return view('caja.index');
    }
}
