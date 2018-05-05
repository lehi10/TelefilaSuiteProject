<?php

namespace telefilaSuite\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    public function index()    {
        return view('superUsuario.index');
    }

    public function search(Request $request){
        if($request->ajax()){
            
            $output=" ";
            $c = " ' ";
            $datos = DB::table('hospitals')->where('nombre', 'like', '%'.$request->search.'%')->get();
            //echo($c);
            if($datos){
                //$isq= "{{url('/'.$hos->id.'/admin')}}"
                    foreach ($datos as $key => $dato) {
                        $output.='<tr>'.
                        '<td><span class="text-muted">'.$dato->id.'</span></td>'.
                        '<td><a href="'.$dato->id.'/admin" class="text-inherit">'.$dato->nombre.'<br></a></td>'.
                        '<td>'.$dato->ciudad.'</td>'.
                        '<td>0</td>'.
                        '<td> <span class="status-icon bg-success"></span>Operando </td>'.
                        '<td class="text-right">
                          <select class="custom-select">
                            <option value="STATUS_CODE" selected="selected">Cambiar
                              estado</option>
                            <option value="JSON_BODY">En implementación</option>
                            <option value="HEADERS">Operando</option>
                            <option value="TEXT_BODY">Suspensión temporal</option>
                            <option value="RESPONSE_TIME">Cancelado</option>
                          </select>
                        </td>'.
                        '<td> <a class="icon" href="javascript:void(0)"> </a><br></td>'.
                      '</tr>';                    
                    }        
                    return Response($output);
            }else{
                $output = "No se encontraron coincidencias";
                return Response($output);
            }
        }
    }
        
}
