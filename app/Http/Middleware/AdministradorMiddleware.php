<?php

namespace telefilaSuite\Http\Middleware;

use Closure;

class AdministradorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $r1,$r2)
    {
        if($request->user()->tieneRol($r1) or $request->user()->tieneRol($r2))
        {
            return $next($request);
        }
        abort(403,"Usuario no autorizado.");
        
    }
}
