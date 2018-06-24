<?php

namespace telefilaSuite\Http\Controllers;

use Illuminate\Http\Request;
use telefilaSuite\Medico;
use telefilaSuite\Especialidad;

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

}
