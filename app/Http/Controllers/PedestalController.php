<?php

namespace telefilaSuite\Http\Controllers;

use telefilaSuite\Paciente;
use Illuminate\Http\Request;

class PedestalController extends Controller
{
    public function index()    
    {
        return view('pedestal.index');
    }

    public function especialidad(Request $request)
    {
        
        if(isset($request->dni))
        {
            
            $paciente = Paciente::select('*')->where('dni',$request->dni)->get();
            if(count($paciente))
                return view('pedestal.especialidad',['paciente'=>$paciente[0]]);    
            else
                return redirect('pedestal')->with(['message'=> 'El DNI no es valido, o el paciente aun no tiene un registro. Puede acercarse a Admisión para solucionar el problema.','kindMessage'=>'warning']);        
        }
        return redirect('pedestal')->with(['message'=> 'Ingrese DNI','kindMessage'=>'warning']);
        
    }

    public function fecha(Request $request)
    {
        
        return view('pedestal.fecha');
    }
    
    public function imprime(Request $request)
    {
        return view('pedestal.imprime');
    }
    
    public function imprimiendo(Request $request)
    {
        return view('pedestal.imprimiendo');
    }
}
