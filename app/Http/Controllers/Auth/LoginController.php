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
        if (Auth::attempt(['username'=>$request->username,'password'=>$request->password,'estado'=>1],$request->remember))
        {
            $user=Auth::user();
            //return $user->rol->nombre;
            return redirect($user->rol->url);
        }
        elseif(User::where('username',$request->username))
        {

            return redirect('/login')->withErrors(['user'=>"El usuario no esta activo"]);
        }
        //return "No logueado";
        return  redirect("/login")->withErrors(["user"=>"Usuario o contraseña incorrectos"]);
    }

}
