<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsLedger
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(session()->get('RoleType') == "USER"){
            return route("/404");
        }
        return $next($request);
    }
}
