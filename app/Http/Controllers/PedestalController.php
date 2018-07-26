<?php

namespace telefilaSuite\Http\Controllers;

use Illuminate\Http\Request;

class PedestalController extends Controller
{
    public function index()    
    {
        return view('pedestal.index');
    }
}
