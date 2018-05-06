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
    protected $redirectTo = '/';
    public function login(Request $request)
    {
        //valido
        $this->validate($request,[
            'username' => 'required',
            'password' => 'required'
        ]);
    
        if(Auth::attempt(['username' => $request->username, 'password' => $request->password],$request->remember))
        {
            
               return redirect()->intended('/superUsuario');
                       
        }
        if (Auth::guard('administrador')->attempt(['usuario' => $request->username, 'password' => $request->password],$request->remember)) {
            // The user is active, not suspended, and exists.
            
            $id = Auth::guard('administrador')->user()->hospital_id;
            //return $id;
            return redirect($id."/admin");
        }
        //si no entra es que se equivoco o no existe
        //lo regreso al login recordando solo el username mas no el password
        return  redirect("/login")->with(["error"=>"El correo o contraseña son incorrectos"]);
    }
}
