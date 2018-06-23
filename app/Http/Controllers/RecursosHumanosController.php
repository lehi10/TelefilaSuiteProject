<?php

namespace telefilaSuite\Http\Controllers;

use Illuminate\Http\Request;

class RecursosHumanosController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth','rol:Recursos Humanos']);
    }
    public function index()
    {
        return view('recursosHumanos.index');

    }
}
