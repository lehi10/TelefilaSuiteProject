<?php

namespace telefilaSuite\Http\Controllers\Auth;

use Illuminate\Http\Request;
use telefilaSuite\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use telefilaSuite\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirecTo="/";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
        $user=User::where('username',$request->username)->first();
        if (Auth::attempt(['username'=>$request->username,'password'=>$request->password,'estado'=>1],$request->remember))
        {
            //return $user->rol->nombre;
            return redirect($user->rol->url);
        }
        // elseif(Auth::attempt(['username'=>$request->username,'password'=>$request->password]))
        // {
        //     Auth::logout();
        //     return redirect('/login')->withErrors(['user'=>"El usuario no esta activo"]);
        // }
        //return "No logueado";
        if ($user->estado==0)
        {
            return  redirect("/login")->withErrors(["user"=>"El usuario no esta activo"]);
        }
        else
        {
            return  redirect("/login")->withErrors(["user"=>"Usuario o contraseña incorrectos"]);
        }
    }

}
