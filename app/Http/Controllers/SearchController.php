<?php

namespace telefilaSuite\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use telefilaSuite\Consultorio;

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
                    $states = array("En implementación", "Operando", "Suspención Temporal");   
                    $color = array("bg-warning","bg-success","bg-danger");                    
                    foreach ($datos as $key => $dato) {                        
                        $output.='<tr>'.
                        '<td><span class="text-muted">'.$dato->id.'</span></td>'.
                        '<td><a href="/superuser/cliente/'.$dato->id.'" class="text-inherit">'.$dato->nombre.'<br></a></td>'.
                        '<td>'.$dato->ciudad.'</td>'.
                        '<td>0</td>'.
                        '<td> <span class="status-icon '.$color[$dato->estado-1].'"></span>'.$states[$dato->estado-1].'</td>'.
                        '<td class="text-right">
                        <select class="custom-select" id="select1" onchange="updateState(this.value,'.$dato->id.')" >                                                                    
                            <option value="1"'.(($dato->estado ==1 ) ? 'selected="selected"':'').'>En implementación</option>
                            <option value="2"'.(($dato->estado ==2 ) ? 'selected="selected"':'').'>Operando</option>
                            <option value="3"'.(($dato->estado ==3 ) ? 'selected="selected"':'').'>Suspensión temporal</option>                                            
                        </select>
                        </td>
                        <td> 
                        <a href="{{url(superuser/editClient/'.$dato->id.')}}" class="btn btn-lg "> 
                        <span class="glyphicon glyphicon-edit"></span></a>
                        </td>                            
                     </tr>';                    
                    }        
                    return Response($output);
            }else{
                $output = "No se encontraron coincidencias";
                return Response($output);
            }
        }
    }

    public function searchConsultorio(Request $request)
    {
        if($request->ajax()){
            
            $output=" ";
            $c = " ' ";
            $datos = Consultorio::where('nombre', 'like', '%'.$request->search.'%')->get();
            //echo($c);
            if($datos){
                //$isq= "{{url('/'.$hos->id.'/admin')}}"
                    foreach ($datos as $key => $consultorio) {
                        $output.='<tr>'.
                       '<td><span class="text-muted">'.$consultorio->id.'</span></td>
                       <td><a href="'.url('administrador/'.$consultorio->id.'/consultorio').'" class="text-inherit">'.$consultorio->nombre.'<br>
                         </a></td>
                       <td>'.$consultorio->especialidad->nombre.'</td>
                       <td>'.$consultorio->user->username.'</td>
                       <td style="text-align: center;"><strong>8</strong></td>
                       <td><span class="badge badge-warning">50%</span> </td>
                       <td> <div class="custom-switches-stacked"> <label class="custom-switch">
                         <input name="option" value="1" class="custom-switch-input" onchange="cambiarEstado('.$consultorio->id.')"

                            type="checkbox"'. (($consultorio->pedestal==1 ) ? 'checked' :'' ).'> <span class="custom-switch-indicator"></span>
                         <span class="custom-switch-description"></span></label><label

                         class="custom-switch"></label></div> </td>'.
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
