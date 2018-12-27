<?php

namespace telefilaSuite\Http\Controllers;

use Illuminate\Support\Facades\DB;   

use telefilaSuite\Hospital;
use telefilaSuite\Persona;
use telefilaSuite\Administrador;
use telefilaSuite\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Pagination\Paginator;

use Session;
use Redirect;



function limpiarCaracteresEspeciales($string ){
    $string = htmlentities($string);
    $string = preg_replace('/\&(.)[^;]*;/', '\\1', $string);
    return $string;
}


class SuperUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth','rol:Super Usuario']);
    }

    public function index(Request $request)
    {
        /* if($request->search == "")
        {
            $hospitales = Hospital::paginate(10);
            //return view('superUsuario.index',compact('hospitales'));
            return view('superUsuario.index',["hospitales"=>$hospitales]);
            //return response()->json(view('superUsuario.index',compact('hospitales'))->render());
        }
        else
        {
            $hospitales = Hospital::where('nombre','LIKE','%'. $request->search . '%')->paginate(100);
            //$hospitales->apppends($request->only(''));
            //return view('superUsuario.index',compact('hospitales'));
            //return view('superUsuario.index',["hospitales"=>$hospitales]);
        }
        /*
        //$hos= DB::table('hospitals')->paginate(10);
        $hos = Hospital::paginate(10);
        return view('superUsuario.index',["hospitales"=>$hos]);
        */ 
        //$hospitales=Hospital::paginate(10);
        if ($request->page)
        {
            return view('superUsuario.index',["page"=>$request->page]);
        }
        return view('superUsuario.index',["page"=>0]);
    }

    public function inicio(Request $request)
    {
        //return $request;
        if ($request->page){
            $hospitales=Hospital::paginate(10,["*"],'page',$request->page);
            $hospitales->withPath('/superuser');
        }
        else{
            $hospitales=Hospital::paginate(10,["*"],'page');
            $hospitales->withPath('/superuser');
        }

        return view('superUsuario.tabla',["hospitales"=>$hospitales]);
    }
    
    public function obtenerTabla(Request $request)
    {
        //$hospitales = DB::table('Hospital')->select('')
        $hospitales = Hospital::where('nombre','LIKE','%'. $request->input('busqueda') . '%')->paginate(10);
        
        return response()->json(view('superUsuario.tabla',compact('hospitales'))->render());    
        
    }

    public function nuevoCliente(Request $request)
    {   
        return view('superUsuario.nuevoCliente');
    }

    /*Muestra la lista de usuarios que tiene ese cliente(hospital) */
    public function usersCliente($idCliente){
        $cliente =Hospital::find($idCliente);
        $users=$cliente->users->where('rol_id','>',2);
        $user=User::find(Auth::user()->id);
        if ($user->rol_id==1)
        {
            $user->hospital_id=$idCliente;
            $user->save();
            //return "NUevo user hospital: ".$user->hospital_id;
        }
        
        
        return view('superUsuario.cliente',["usuarios"=>$users,"hospital_id"=>$cliente->id,"nombre"=>$cliente->nombre]);
    }
    public function clienteUser($idUser)
    {
        $user =User::find($idUser);
        return view('superUsuario.editarUsuario',['usuario'=>$user]);                
    }

    public function editClientUser(Request $request)
    {
        if (in_array( $request->optRol,["3","4","5","6"]))
        {
            $user=User::find($request->idUsuario);
            $user->rol_id=$request->optRol;
            if($request->password)
            {
                $user->password=bcrypt($request->password);
                
            }
            $user->save();
            return redirect('superuser/usersClient/'.$request->idCliente);
        }
    }


    public function nuevoUser($idCliente)
    {
        return view('superUsuario.nuevoUsuario',["hospital_id"=>$idCliente]);
    }

    public function nuevoClientUser(Request $request)
    {
        //return $request;
        $user= new User;
        $user->fill($request->except(['_token']));
        $user->password=bcrypt($request->password);
        if ($request->estado)
            $user->estado=true;
        else
            $user->estado=false;
        //return $user;
        $user->save();
        return redirect('superuser/usersClient/'.$request->hospital_id)->with('message','El usuario ha sido registrado satisfactoriamente.');
    }
    
    /**
     * Save a New Cliente (Hospital)
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeNuevoCliente(Request $request)
    {
        //return dd($request);
        $validateData = $request->validate([
            'usuario' => 'required',
            'password' => 'required',
            'nombre' => 'required',
            'ruc' => 'required|numeric',
            'telefono' => 'required|numeric',
            'nombrePersona' => 'required',
            'emailPersona' => 'required|email',
            'celularPersona' => 'required|numeric',
            'direccion' => 'required',
            'ciudad' => 'required',
            'referencia' => 'required',
            'tarifa' => 'nullable|numeric',
        ]);
        $hos= new Hospital();
        $hos->fill($request->except(["_token","mes","dia","year","usuario","password","licencia"]));
        $hos->fechaInicio=join('-',[ $request->year,$request->mes,$request->dia]);
        if ($request->licencia)
            $hos->licenciaAnual=true;
        else
            $hos->licenciaAnual=false;
        $hos->save();  
        $codigo=mb_substr($hos->nombre,0,2,'UTF-8').$hos->id.substr($hos->ruc,-4);
        $hos->codigo= strtolower(limpiarCaracteresEspeciales($codigo));
        $hos->save();

        $admin= new User();
        $admin->username=$request->usuario;
        $admin->password=bcrypt($request->password);  // No se olviden de encriptarlo, si no el login no funciona
        $admin->estado=true;
        $admin->nombres="Hospital";
        $admin->apellidos=$request->nombre;
        $admin->hospital_id=$hos->id;   // Se llama el id del hospital que se creó arriba
        $admin->rol_id=2;  //Administrador
        $admin->save();
        return redirect('superuser/')->with('message','El cliente ha sido registrado satisfactoriamente.');
    }

    public function guardarUsuario(Request $request){
        $per= new Persona;
        $per->nombre=$request->nombre;
        $per->apellido=$request->apellidos;
        $per->dni=$request->dni;
        $per->telefono=$request->celular;
        $per->sexo=0;
        $per->edad=0;
        $per->direccion="-";
        $per->save();
     
        $user= new User;
        $user->email=$request->usuario;
        $user->username=$request->usuario;
        $user->password=bcrypt($request->password);
        $user->hospital_id=$request->hospital_id;
        $user->rol=0;
        $user->persona_id=$per->id;
        $user->save();

        echo "DNI  : ".$request['hospital_id']."<br>";
        echo $request;
        return redirect('/superUsuario/usersClient/'.$request['hospital_id'])->with('message','Datos guardados satisfactoriamente.');
    }


        
    public function cambiarEstadoUsuario(Request $request)
    {
        $user=User::find($request->idUsuario);
        $estado_actual=$user->estado;
        if($estado_actual==0)
            $user->estado=1;
        else 
            $user->estado=0;
        $user->save();
        return "Estado cambiado";
    }

    public function editarCliente($idCliente)
    {
        $cliente = Hospital::find($idCliente);
        $user=$cliente->users->where('rol_id','==',2)->first();
        return view('superUsuario.editarCliente',["hospital"=>$cliente,"usuario"=>$user]);
    }

    public function cambiarEstadoCliente(Request $request)
    {
        $cliente=Hospital::find($request->idCliente);
        $cliente->estado = $request->state;
        $cliente->save();
        return "Estado cambiado";
    }

    public function updateCliente(Request $request, $idCliente){
        
        $cliente = Hospital::find($idCliente);
        $cliente->nombre = $request->nombre;
        $cliente->telefono = $request->telefono;
        $cliente->nombrePersona = $request->nombrePersona;
        $cliente->emailPersona = $request->emailPersona;
        $cliente->celularPersona= $request->celularPersona;
        $cliente->direccion = $request->direccion;
        $cliente->ciudad= $request->ciudad;
        $cliente->referencia= $request->referencia;
        $cliente->region= $request->region;
        $cliente->logo= $request->logo;
        $cliente->contratos= $request->contratos;
        $cliente->direccion = $request->direccion;
        $cliente->tarifa= $request->tarifa;
        $cliente->estado= $request->estado;
        $cliente->save();

        $user = User::where('hospital_id','=',$idCliente)->where('rol_id','=',2)->first();        
        $user->username = $request->usuario;
        $user->save();
        return redirect('superuser/')->with('message','Datos guardados satisfactoriamente');          

    }
    
    public function eliminarUsuario(Request $request)
    {     
        Hospital::destroy($request->idUser);        
        return redirect("superuser/")->with(["message"=>"El usuario ha sido eliminado correctamente"]);
    }

    
}
