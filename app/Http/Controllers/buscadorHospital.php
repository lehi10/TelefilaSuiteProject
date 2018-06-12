<?php

namespace telefilaSuite\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class buscadorHospital extends Controller
{
    public function index()
    {
        //donde se busca
        return view('search.search');
    }
    public function buscar(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $hospitals = DB::table('hospitals')->where('nombre','LIKE','%'.$request->search."%")->get();
            if($hospitales)
            {
                foreach($hospitals as $key => $hospital)
                {
                    $output ='<tr>'.
                    '<td>'.$hospital->id.'</td>'.
                    '</tr>';
                }
                return Response($output);
            }
        }
    }
}
