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
    public function __construct()
    {
        $this->middleware(['auth','rol:superUser']);
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
            return redirect('superuser/');//->with('message','store');

        else
            return "Error : Overflow of Results.";
    }

    public function cliente($idCliente){
        $cliente =Hospital::find($idCliente);
        $users=$cliente->users->where('rol_id','!=',2);
        
        return view('superUsuario.cliente',["usuarios"=>$users,"hospital_id"=>$cliente->id,"nombre"=>$cliente->nombre]);
    }


    public function clienteUser($idUser)
    {
        $user =User::find($idUser);
        return view('superUsuario.editarUsuario',['usuario'=>$user]);                
    }

    public function editClientUser(Request $request)
    {
        //return $request;
        if (in_array( $request->optRol,["3","4","5"]))
        {
            $user=User::find($request->idUsuario);
            $user->rol_id=$request->optRol;
            if($request->password)
            {
                $user->password=bcrypt($request->password);
                
            }
            $user->save();
            return redirect('superuser/cliente/'.$request->idCliente);
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
        return redirect('superuser/cliente/'.$request->hospital_id)->with('message','El usuario ha sido registrado satisfactoriamente.');
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
        //return dd($request);
        $hos= new Hospital();
        $hos->fill($request->except(["_token","mes","dia","year","usuario","password"]));  
        //$hos->estado=1;
        $hos->fechaInicio=join('-',[ $request->year,$request->mes,$request->dia]);
        if ($request->licencia)
            $hos->licenciaAnual=true;
        else
            $hos->licenciaAnual=false;
        
        $hos->save();  //Ya no necesitas hacer la consulta de abajo por que ya esta en $hos;
      
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
        return redirect("/superUsuario/cliente/".$request['hospital_id']);
    }
}
