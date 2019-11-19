<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AksesAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role1 = null)
    {   
        if(Auth::user()->akses == 'asisten' && $role1 == 'asisten') {
            return $next($request);
        } else if(Auth::user()->akses =='admin'){
        return $next($request);
    }
    return abort(404);
    }
}
