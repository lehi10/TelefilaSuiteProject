<?php

namespace telefilaSuite\Http\Controllers\Auth;

use Illuminate\Http\Request;
use telefilaSuite\Http\Controllers\Controller;
use Auth;

class OurLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:auth');
    }
    public function login($request)
    {
        //valido
        $this->validate($request,[
            'username' => 'required',
            'password' => 'required'
        ]);
        //lo busca en la bd
        if(Auth::attempt(['username' => $request->username, 'password' => $request->password],$request->remember))
        {
            //busco que rol tiene y lo direcciona a su respectiva view
            if($request->rol == 1)
            {
                return redirect()->intended(route('superuser.index'));
            }
            if($request->rol == 2)
            {
                return redirect()->intended(route('admin.index'));
            }
            if($request->rol == 3)
            {
                return redirect()->intended(route('caja.index'));
            }
            if($request->rol == 1)
            {
                return redirect()->intended(route('admision.index'));
            }           
        }
        //si no entra es que se equivoco o no existe
        //lo regreso al login recordando solo el username mas no el password
        return  redirect()->back()->withInput($request->only('username','remember'));
    }
}
