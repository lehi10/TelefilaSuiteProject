<?php

namespace telefilaSuite\Http\Controllers\Auth;

use Illuminate\Http\Request;
use telefilaSuite\Http\Controllers\Controller;
use Auth;

class OurLoginController extends Controller
{
   /* public function __construct()
    {
        $this->middleware('auth');
    }*/
    public function login(Request $request)
    {
        //valido
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ]);
        echo "asd";
        //lo busca en la bd
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password],$request->remember))
        {
            
               return redirect()->intended('/superUsuario');
                       
        }
        //si no entra es que se equivoco o no existe
        //lo regreso al login recordando solo el username mas no el password
        return  redirect()->back()->withInput($request->only('email','remember'));
    }
}
