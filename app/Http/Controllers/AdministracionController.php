<?php

namespace telefilaSuite\Http\Controllers;

use Illuminate\Http\Request;

class AdministracionController extends Controller
{
    
    public function __construct()
    {
      
    }

    public function index(Request $request, $idCliente)
    {
        return "inicio" ;
    }

    public function nuevoUsuario(Request $request, $idCliente)
    {
        return view('administracion.nuevoUsuario');
    }
    
    public function editarUsuario( Request $request,$idCliente,$idUsuario)
    {
        return view('administracion.editarUsuario');
    }
    
}
