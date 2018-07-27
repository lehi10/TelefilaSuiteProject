<?php

namespace telefilaSuite\Http\Controllers;

use Illuminate\Http\Request;

class PedestalController extends Controller
{
    public function index()    
    {
        return view('pedestal.index');
    }

    public function especialidad(Request $request)
    {
        return view('pedestal.especialidad');
    }

    public function fecha(Request $request)
    {
        return view('pedestal.fecha');
    }
}
