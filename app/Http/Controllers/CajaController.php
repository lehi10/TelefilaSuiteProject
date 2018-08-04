<?php

namespace telefilaSuite\Http\Controllers;

use Illuminate\Http\Request;
use telefilaSuite\Hospital;
use telefilaSuite\Paciente;
use telefilaSuite\Cita;
use Illuminate\Support\Facades\DB;

use Auth;


class CajaController extends Controller
{
    public function index(Request $request)    
    {
        if(isset($request->citaID))
        {
            $hospitalID = Auth::user()->hospital_id; 
            $citas = DB::table('pacientes')->select('*','pacientes.id as pacienteID')
            ->Join('citas', 'citas.paciente_id', '=', 'pacientes.id')
            ->where('citas.id',$request->citaID)
            ->where('citas.hospital_id',$hospitalID)
            ->where('fecha',date("Y-m-d"))
            ->get();

            return view('caja.index',['citas'=>$citas]);
        }
        else
        {
            $hospitalID = Auth::user()->hospital_id; 
            $citas = DB::table('pacientes')->select('*','pacientes.id as pacienteID')
            ->Join('citas', 'citas.paciente_id', '=', 'pacientes.id')
            ->where('citas.hospital_id',$hospitalID)
            ->where('fecha',date("Y-m-d"))
            ->get();
            return view('caja.index',['citas'=>$citas]);
        }
        
    }

    public function guardarPago(Request $request)
    {
        $cita=Cita::find($request->citaID);
        $cita->pagado=1;
        $cita->save();
        return redirect('caja?citaID='.$request->citaID)->with(["message"=>"Se ha realizado el pago con exito."]);
    }

    public function eliminarTicket(Request $request)
    {
        $cita=Cita::find($request->citaID);

        if(isset($cita))
        {
            $cita->delete();
            return redirect('caja')->with(["message"=>"Se ha eliminado el Ticket con exito.","kind"=>"succes"]);
        }
        else
        {
            return redirect('caja')->with(["message"=>"Hubo algún problema, no se ha podido eliminar el ticket.","kind"=>"danger"]);
        }
            
        
        
    }
}
