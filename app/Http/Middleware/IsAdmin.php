<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
        if($request->session()->get("AuthLvl") == 1 ) {
            return $next($request);
        }
        else if($request->session()->get("AuthLvl") == 0){
            return redirect("/doctor");
        }
        return redirect("/login");

    }
}
