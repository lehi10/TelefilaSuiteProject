<?php

namespace telefilaSuite\Http\Controllers;

use Illuminate\Http\Request;
use telefilaSuite\Medico;

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
        return view('recursosHumanos.nuevoMedico');
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
