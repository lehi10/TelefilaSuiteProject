<?php

namespace telefilaSuite\Http\Controllers;

use telefilaSuite\Paciente;
use telefilaSuite\Hospital;
use telefilaSuite\Especialidad;
use Illuminate\Http\Request;

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
                $especialidades=Especialidad::all();

                //return $hospital->consultorios()->where("pedestal",1)->get();

                return view('pedestal.especialidad',['paciente'=>$paciente]);    
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
