<?php

namespace telefilaSuite\Http\Controllers;

use Illuminate\Http\Request;
use telefilaSuite\User;
use DB;
use Auth;

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
            $datos = User::where('nombres', 'like', '%'.$request->search.'%')->where('users.hospital_id',$request->id)->where('rol_id','>=',3)->get();
            //echo($c);
            //return dd($datos);
            if($datos){
                //$isq= "{{url('/'.$hos->id.'/admin')}}"
                    foreach ($datos as $key => $dato) {
                        $output.='<tr>'.
                        '<td><span class="text-muted">'.$dato->id.'</span></td>'.
                        '<td><a href="/'.Auth::user()->rol->url.'/'.$dato->id.'/user" class="text-inherit">'.$dato->nombres.' ' .$dato->apellidos. '<br></a></td>'.
                        '<td>'.$dato->username.'</td>'.
                        '<td>'.$dato->rol->nombre.'</td>'.
                        '<td>
                        <label class="custom-switch">
                            <input name="optRol" value="'.$dato->id.'" class="custom-switch-input" onchange="cambiarEstado(this.value)"'. (($dato->estado==1)?'checked':'') .' type="checkbox"> 
                            <span class="custom-switch-indicator"></span> 
                        </label>
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
