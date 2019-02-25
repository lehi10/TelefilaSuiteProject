<?php

namespace telefilaSuite\Http\Controllers;

use Illuminate\Http\Request;
use telefilaSuite\Hospital;
use telefilaSuite\Paciente;
use telefilaSuite\Cita;
use telefilaSuite\Agenda;
use Illuminate\Support\Facades\DB;

use Auth;


/**
 * Controlador para el modulo Caja.
 */
class CajaController extends Controller
{
    /**
     * Funcion del index del modulo Caja.
     * Entradas:    Recibe por POST el codigo de un ticket ( citaID ).
     *
     * Salida:      El registro de la cita a partir de citaID ,
     *              o los registros de las citas generadas el
     *              día actual. La salida es enviada a una vista
     *
     */
    public function index(Request $request)
    {
        //Si se ha enviado el dato por POST se busca el registro con citaID y se envia a una vista.
        if(isset($request->citaID))
        {
            //Obtenemos el id del hospital en el que nos encontramos (variable que fue guardada en Auth )
            $hospitalID = Auth::user()->hospital_id;
            $citas = DB::table('pacientes')->select('pacientes.*','citas.*','pacientes.id as pacienteID','consultorios.nombre as consultorio_nombre')
            ->Join('citas', 'citas.paciente_id', '=', 'pacientes.id')
            ->Join('consultorios', 'consultorios.id', '=', 'citas.consultorio_id')
            ->where('citas.id',$request->citaID)
            ->where('citas.hospital_id',$hospitalID)
            ->get();
            return view('caja.index',['citas'=>$citas]);
        }
        //Si no se ha enviado el citaID se muestran las citas generadas el día actual
        else
        {
            $hospitalID = Auth::user()->hospital_id;
            $citas = DB::table('pacientes')->select('pacientes.*','citas.*','pacientes.id as pacienteID','consultorios.nombre as consultorio_nombre')
            ->Join('citas', 'citas.paciente_id', '=', 'pacientes.id')
            ->Join('consultorios', 'consultorios.id', '=', 'citas.consultorio_id')
            ->where('citas.hospital_id',$hospitalID)
            ->orderBy('citas.created_at', 'desc')
            ->limit(20)
            ->get();
            return view('caja.index',['citas'=>$citas]);
        }

    }

    /**
     * Función para guardar un pago a una cita generada en el pedestal.
     * Entradas:    Recibe por POST el codigo de un ticket ( citaID ).
     *
     * Salidas:     Mensaje de confirmación de pago.
     */
    public function guardarPago(Request $request)
    {
        //Se busca a partir de citaID el registro al que se actualizará el pago
        $cita=Cita::find($request->citaID);
        $cita->pagado=1;
        $idAgenda=$cita->agenda_id;
        $cita->save();
        //Actualiza los turnos o citas que fueron pagados en caja
        $agendaSeleccionada=Agenda::find($idAgenda);
        $agendaSeleccionada->turnosPagados++;
        $agendaSeleccionada->save();

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
