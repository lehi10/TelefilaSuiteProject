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

    public function nuevoUsuario()
    {
        return view('superUsuario.nuevoUsuario');
    }

    public function cliente(Request $request)
    {
        $clienteEntrada = $request->input('clienteEntrada');


        return view('superUsuario.cliente');
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
        return redirect('superUsuario/');
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
