<?php

namespace telefilaSuite\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class superUsuario
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$rol)
    {
        if($request->user()->tieneRol($rol))
        {
            return $next($request);
        }
        abort(403,"Usuario no autorizado.");
    }
}
