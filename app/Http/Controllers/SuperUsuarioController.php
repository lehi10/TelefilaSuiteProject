<?php

namespace telefilaSuite\Http\Controllers;

use telefilaSuite\Hospital;
use telefilaSuite\Persona;
use telefilaSuite\Administrador;
use telefilaSuite\User;
use Illuminate\Http\Request;

class SuperUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        //$this->middleware('auth');
    }
    public function index(Request $request)
    {
        $hos=Hospital::all();
        return view('superUsuario.index',["hospitales"=>$hos]);
    }

    public function nuevoCliente(Request $request)
    {   
        return view('superUsuario.nuevoCliente');
    }

    public function nuevoUsuario($idCliente){
        $countRes =Hospital::where('id',$idCliente);
        if($countRes->count() == 1 )
        {
            $cliente=$countRes->first();
            return view('superUsuario.nuevoUsuario',["id"=>$cliente->id,"nombre"=>$cliente->nombre] );
        }        
        if($countRes->count() == 0 )
            return redirect('superUsuario/');//->with('message','store');

        else
            return "Error : Overflow of Results.";
    }

    public function cliente($idCliente){
        $cliente =\telefilaSuite\Hospital::where('id',$idCliente)->get();   
        return view('superUsuario.cliente',compact('cliente'));
    }

    public function listarClientes(Request $request){
        try{
            if($request['clienteEntrada'])
            {
                $clientes =\telefilaSuite\Hospital::where('nombre_hospital','LIKE' ,'%'.$request['clienteEntrada'].'%')->get(); 
                return view('superUsuario.listaClientes',compact('clientes'));
            }
            else
            {
                $clientes =\telefilaSuite\Hospital::All();        
                return view('superUsuario.listaClientes',compact('clientes'));
            }
        }
        catch(Exception $e)
        {
            return redirect('superUsuario/');//->with('message','store');
        }
    }

    public function listarUsuarios(Request $request){
        if($request['nombreUsuario'])
        {
            $usuarios =\telefilaSuite\User::where('username','LIKE' ,'%'.$request['nombreUsuario'].'%')->get(); 
            return view('superUsuario.listarUsuarios',compact('usuarios'));
        }
        else
        {
            $usuarios =\telefilaSuite\User::All();        
            return view('superUsuario.listarUsuarios',compact('usuarios'));
        }
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Save a New Cliente (Hospital)
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
        /*
        \telefilaSuite\Hospital::create([
            'nombre_hospital'=>$request['nombreEst'],
            'ruc'=>$request['ruc'],
            'director'=>$request['director'],
            'direccion'=>$request['direccion'],
            'cuidad'=>$request['cuidad'],
            'pais'=>$request['pais'],
            'telefono_hospital'=>$request['celular'],
            'personaContacto'=>$request['personaContacto']
        ]);
        */
        //return $request->except(["_token","clave","usuario"]);
        $hos= new Hospital();
        $hos->fill($request->except(["_token","clave","usuario","password"]));  
        /* ^ En el form deben tener el mismo nombre que los atributos de la base de datos para que funcione, 
            En el except ponen los campos del form que no quieren que se incluyan
        */

        //$hos->nombre=$request->nombreEst;
        //$hos->ruc=$request->ruc;
        //$hos->director=$request->director;
        //$hos->direccion=$request->direccion;
        //$hos->ciudad=$request->ciudad;
        //$hos->pais=$request->pais;
        //$hos->telefono=$request->celular;
        //$hos->personaContacto=$request->personaContacto;

        $hos->save();  //Ya no necesitas hacer la consulta de abajo por que ya esta en $hos;
      
        $admin= new Administrador();
        $admin->usuario=$request->usuario;
        $admin->password=bcrypt($request->password);  // No se olviden de encriptarlo, si no el login no funciona
        $admin->hospital_id=$hos->id;   // Se llama el id del hospital que se creó arriba
        $admin->save();
        return redirect('superUsuario/');//->with('message','store');
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
        return redirect("/superUsuario/cliente/".$request['hospital_id']);
    }
}
