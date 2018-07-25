<?php

namespace telefilaSuite\Http\Controllers;

use Illuminate\Http\Request;

class CajaController extends Controller
{
    public function index()    {
        return view('caja.index');
    }
}
