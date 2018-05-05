<?php

namespace telefilaSuite\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    public function index()    {
        return view('administracion.index');
    }

    public function search(Request $request){
        if($request->ajax()){
            
            $output=" ";
            $c = " ' ";
            $datos = DB::table('personas')->where('nombre', 'like', '%'.$request->search.'%')->get();
            //echo($c);
            if($datos){
                //$isq= "{{url('/'.$hos->id.'/admin')}}"
                    foreach ($datos as $key => $dato) {
                        $output.='<tr>'.
                        '<td><span class="text-muted">'.$dato->id.'</span></td>'.
                        '<td><a href="'.$dato->id.'/admin" class="text-inherit">'.$dato->nombre.'<br></a></td>'.
                        '<td>'.$dato->usuario.'</td>'.
                        '<td>0</td>'.
                        '<td> <span class="status-icon bg-success"></span>Activo </td>'.
                        '<td class="text-right">
                          <select class="custom-switch-indicator">
                            before::
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
