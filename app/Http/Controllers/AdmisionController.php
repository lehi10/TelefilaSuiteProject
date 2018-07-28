<?php

namespace telefilaSuite\Http\Controllers;

use Illuminate\Http\Request;
use telefilaSuite\Paciente;
use telefilaSuite\Hospital;
use telefilaSuite\Especialidad;
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
            return view('admision.index');

        if(!isset(Auth::user()->hospital_id)) 
            return view('admision.index');
        
        $paciente=Paciente::where('dni',$request->pacienteDNI)->where("hospital_id",Auth::user()->hospital_id)->first();
        
        if(!$paciente)
        {
            $message='No se encontró al Paciente con el DNI : '.$request->pacienteDNI;
            return view('admision.index',['message'=> $message,'kindMessage'=>'danger']);
            return redirect('admision')->with(["message"=>"El Paciente con el DNI: ".$request->pacienteDNI." no se ha encontrado.","kindMessage"=>"danger"]);
        }
        
        $especialidades=Especialidad::all();
        return view('admision.index',['paciente'=>$paciente,"dni"=>$request->pacienteDNI,"especialidades"=>$especialidades]);
    }

    public function referir(Request $request)
    {
        $paciente=Paciente::find($request->paciente_id);
        $especialidad=Especialidad::find($request->especialidad);
        $especialidades = $paciente->especialidads()->pluck("id");
        $es=(int)$request->especialidad;
        if (!$especialidades->contains($es))
        {
            $paciente->especialidads()->attach($request->especialidad,["inicio"=>$request->inicio,"final"=>$request->final]);
            return redirect("admision")->with(["message"=>"El paciente ha sido referido a: ".$especialidad->nombre]);
        }
        else{
            $paciente->especialidads()->detach($request->especialidad);
            $paciente->especialidads()->attach($request->especialidad,["inicio"=>$request->inicio,"final"=>$request->final]);
            return redirect("admision")->with(["message"=>"La referencia al paciente ha sido actualizada"]);

            
        }

    }


}
