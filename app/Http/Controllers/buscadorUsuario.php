<?php

namespace telefilaSuite\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class buscadorUsuario extends Controller
{
    public function index()    {
        return view('administracion.index');
    }

    public function search(Request $request){
        //return $request;
        if(TRUE){
            
            $output=" ";
            $c = " ' ";
            //return $request;
            $datos = DB::table('personas')
                        ->join('users','users.persona_id','=','personas.id')
                        ->where('personas.nombre', 'like', '%'.$request->search.'%')->where('users.hospital_id',$request->id)->get();
            //echo($c);
            //return dd($datos);
            if($datos){
                //$isq= "{{url('/'.$hos->id.'/admin')}}"
                    foreach ($datos as $key => $dato) {
                        $output.='<tr>'.
                        '<td><span class="text-muted">'.$dato->id.'</span></td>'.
                        '<td><a href="/'.$request->id.'/admin/editarUsuario/'.$dato->id.'/" class="text-inherit">'.$dato->nombre.'<br></a></td>'.
                        '<td>'.$dato->username.'</td>'.
                        '<td>'.$dato->rol.'</td>'.
                        '<td>
                          <span class="custom-switch-indicator">
                          </span>
                        </td>'.
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
