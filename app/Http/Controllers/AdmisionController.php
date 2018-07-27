<?php

namespace telefilaSuite\Http\Controllers;

use Illuminate\Http\Request;
use telefilaSuite\Paciente;
use telefilaSuite\Hospital;
use Illuminate\Support\Facades\DB;
use Auth;

class AdmisionController extends Controller
{
    public function crearPaciente(Request $request)
    {   
        $paciente= new Paciente;
        $paciente->fill($request->except(["_token"]));
        $paciente->nombres=$request['nombres'];
        $paciente->apellidos=$request['apellidos'];
        
        $paciente->dni=$request['dni'];

        $paciente->departamento=$request['departamento'];
        $paciente->ciudad=$request['ciudad'];
        $paciente->sis=$request['sis']==NULL?0:1;
        $paciente->sexo=$request['sexo'];
        $paciente->edad=0; //Default

        

        $paciente->save();        
        
        $pacienteId=$paciente->id;        
        $hospitalId=Auth::user()->hospital_id;

        DB::table('hospital_paciente')->insert(
            ['paciente_id' => $pacienteId, 
            'hospital_id' => $hospitalId]
        );

        return redirect('admision')->with(["message"=>"El Paciente ha sido creado correctamente"]);
    }

    public function buscarPaciente(Request $request)
    {
        
        if(!isset($request->pacienteDNI)) 
            return view('admision/index');
        
        $paciente=Paciente::where('dni',$request->pacienteDNI)->get();

        if(count($paciente)<1)
        {
            $message='No se encontró al Paciente con el DNI : '.$request->pacienteDNI;
            return view('admision/index',['message'=> $message,'kindMessage'=>'danger']);
        }
            

        return view('admision/index',['paciente'=>$paciente]);
    }


}
