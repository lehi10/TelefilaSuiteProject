<?php

namespace telefilaSuite\Http\Controllers;

use Illuminate\Http\Request;

class SuperUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('superUsuario.index');
    }

    public function nuevoCliente(Request $request)
    {
        
        return view('superUsuario.nuevoCliente');
    }

    public function nuevoUsuario($idCliente)
    {
        $countRes =\telefilaSuite\Hospital::where('id',$idCliente);
        if($countRes->count() == 1 )
        {
            $cliente=$countRes->get();
            return view('superUsuario.nuevoUsuario',compact('cliente') );
        }
            
        if($countRes->count() == 0 )
            return redirect('superUsuario/');//->with('message','store');
        else
            return "Error : Overflow of Results.";
    }

    public function cliente($idCliente)
    {
        $cliente =\telefilaSuite\Hospital::where('id',$idCliente)->get();   
        return view('superUsuario.cliente',compact('cliente'));
    }

    public function listarClientes(Request $request)
    {
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \telefilaSuite\Hospital::create([
            'nombre_hospital'=>$request['nombreEst'],
            'ruc'=>$request['ruc'],
            'director'=>$request['director'],
            'direccion'=>$request['direccion'],
            'cuidad'=>$request['cuidad'],
            'pais'=>$request['pais'],
            'telefono_hospital'=>$request['celular'],
            'personaContacto'=>$request['personaContacto'],
            'clave'=>$request['clave'],
            'usuario'=>$request['usuario']
        ]);
        return redirect('superUsuario/');//->with('message','store');
    }

    public function storeUsuario(Request $request)
    {
        
        echo "DNi : ".$request['dni']."<br>";
        return "Store Usuario";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
